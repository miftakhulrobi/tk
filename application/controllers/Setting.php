<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model('setting_m');
    }

    // tahun ajaran
    public function tahunajaran()
    {
        $data['year'] = $this->setting_m->gettahunajaran('years')->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/setting/tahunajaran/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/setting/tahunajaran/scindex');
        $this->load->view('page/layout/close');
    }

    public function storetahunajaran()
    {
        $year = $this->setting_m->getstoretahunajaran('years', $this->input->post('yearname'))->num_rows();
        if ($year) {
            $this->session->set_flashdata('error', 'Tahun ajaran sudah pernah di buat sebelumnya!');
            redirect('setting/tahunajaran');
        } else {
            $data = [
                'yearname' => $this->input->post('yearname')
            ];
            $this->setting_m->storetahunajaran('years', $data);

            $year = $this->setting_m->getstoretahunajaran('years', $this->input->post('yearname'))->row();
            $kelas = [
                [
                    'classname' => 'TK Kecil A',
                    'year_id' => $year->year_id
                ],
                [
                    'classname' => 'TK Kecil B',
                    'year_id' => $year->year_id
                ],
                [
                    'classname' => 'TK Besar A',
                    'year_id' => $year->year_id
                ],
                [
                    'classname' => 'TK Besar B',
                    'year_id' => $year->year_id
                ],
            ];
            foreach ($kelas as $k) {
                $this->setting_m->storekelasbaru('classes', $k);
            }

            $this->session->set_flashdata('success', 'Data tahun ajaran baru dan data kelas baru berhasil di buat!');
            redirect('setting/tahunajaran');
        }
    }

    public function updatetahunajaran()
    {
        $data = [
            'yearname' => $this->input->post('yearname')
        ];
        $this->setting_m->updatetahunajaran('years', $data, $this->input->post('year_id'));

        $this->session->set_flashdata('success', 'Data berhasil di perbarui!');
        redirect('setting/tahunajaran');
    }

    public function updatestatustahunajaran()
    {
        $data = [
            'status' => $this->input->post('status')
        ];
        $this->setting_m->updatestatustahunajaran('years', $data, $this->input->post('year_id'));

        $this->session->set_flashdata('success', 'Status berhasil di perbarui!');
        redirect('setting/tahunajaran');
    }

    // kelas baru
    public function kelas($id)
    {
        $data['year'] = $this->setting_m->getyearid('years', $id)->row();
        $data['classes'] = $this->setting_m->getclassesyearid('classes', $id)->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/setting/kelasbaru/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    // siswa baru
    public function siswa($id)
    {
        $data['classes'] = $this->setting_m->getclassesid('classes', $id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $data['classes']->year_id)->row();

        $where = [
            'class_id' => $data['classes']->class_id,
            'year_id' => $data['year']->year_id
        ];
        $data['siswa'] = $this->setting_m->getsiswaall('siswas', $where)->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/setting/siswabaru/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/setting/siswabaru/scindex');
        $this->load->view('page/layout/close');
    }

    public function createsiswa($class_id, $year_id)
    {
        $data['classes'] = $this->setting_m->getclassesid('classes', $class_id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $year_id)->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/setting/siswabaru/create', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/setting/siswabaru/sccreate');
        $this->load->view('page/layout/close');
    }

    public function storesiswa()
    {
        $data = [
            'class_id' => $this->input->post('class_id'),
            'year_id' => $this->input->post('year_id'),
            'namasiswa' => $this->input->post('namasiswa'),
            'namapgln' => $this->input->post('namapgln'),
            'noinduk' => $this->input->post('noinduk'),
            'jk' => $this->input->post('jk'),
            'tgllahir' => $this->input->post('tgllahir'),
            'agama' => $this->input->post('agama'),
            'anakke' => $this->input->post('anakke'),
            'ayah' => $this->input->post('ayah'),
            'ibu' => $this->input->post('ibu'),
            'pekerjaanayah' => $this->input->post('pekerjaanayah'),
            'pekerjaanibu' => $this->input->post('pekerjaanibu'),
            'alamatortu' => $this->input->post('alamatortu'),
        ];
        $this->setting_m->storesiswa('siswas', $data);

        $where = [
            'class_id' => $this->input->post('class_id'),
            'year_id' => $this->input->post('year_id'),
            'namasiswa' => $this->input->post('namasiswa'),
            'namapgln' => $this->input->post('namapgln'),
            'noinduk' => $this->input->post('noinduk'),
        ];
        $siswa = $this->setting_m->getnewsiswa('siswas', $where)->row();

        // jalankan function blueprintnilai
        $this->blueprintnilai1($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 7);
        $this->blueprintnilai1($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 8);
        $this->blueprintnilai1($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 9);
        $this->blueprintnilai1($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 10);
        $this->blueprintnilai1($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 11);
        $this->blueprintnilai1($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 12);
        // jalankan function blueprintnilai
        $this->blueprintnilai2($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 1);
        $this->blueprintnilai2($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 2);
        $this->blueprintnilai2($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 3);
        $this->blueprintnilai2($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 4);
        $this->blueprintnilai2($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 5);
        $this->blueprintnilai2($siswa->siswa_id, $siswa->class_id, $siswa->year_id, 6);

        $this->session->set_flashdata('success', 'Data siswa dan blueprint nilai siswa berhasil di tambahkan!');
        redirect('setting/siswa/' . $this->input->post('class_id'));
    }

    public function getsiswaid($id)
    {
        $siswa = $this->setting_m->getsiswaid('siswas', $id)->row();
        echo json_encode($siswa);
    }

    public function siswaedit($id)
    {
        $data['siswa'] = $this->setting_m->getsiswaid('siswas', $id)->row();
        $data['classes'] = $this->setting_m->getclassesid('classes', $data['siswa']->class_id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $data['siswa']->year_id)->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/setting/siswabaru/edit', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/setting/siswabaru/sccreate');
        $this->load->view('page/layout/close');
    }

    public function updatesiswa()
    {
        $data = [
            'namasiswa' => $this->input->post('namasiswa'),
            'namapgln' => $this->input->post('namapgln'),
            'noinduk' => $this->input->post('noinduk'),
            'jk' => $this->input->post('jk'),
            'tgllahir' => $this->input->post('tgllahir'),
            'agama' => $this->input->post('agama'),
            'anakke' => $this->input->post('anakke'),
            'ayah' => $this->input->post('ayah'),
            'ibu' => $this->input->post('ibu'),
            'pekerjaanayah' => $this->input->post('pekerjaanayah'),
            'pekerjaanibu' => $this->input->post('pekerjaanibu'),
            'alamatortu' => $this->input->post('alamatortu'),
        ];
        $this->setting_m->updatesiswa('siswas', $data, $this->input->post('siswa_id'));

        $this->session->set_flashdata('success', 'Data siswa berhasil di diperbarui!');
        redirect('setting/siswa/' . $this->input->post('class_id'));
    }

    // profile
    public function profile()
    {
        $this->load->view('page/layout/header');
        $this->load->view('page/setting/profile/index');
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function updateprofile()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tgllahir' => $this->input->post('tgllahir'),
            'pendidikanterakhir' => $this->input->post('pendidikanterakhir'),
            'pengampu' => $this->input->post('pengampu'),
            'telepon' => $this->input->post('telepon'),
        ];
        $this->setting_m->updateprofile('users', $data, $this->session->userdata('user_id'));

        $this->session->set_flashdata('success', 'Profile berhasil di diperbarui!');
        redirect('setting/profile');
    }

    // nilai
    private function blueprintnilai1($siswa, $classes, $year, $bulan)
    {
        // semester1
        // aspek pengembangan
        for ($i = 1; $i <= 9; $i++) {
            $agamadanmoral = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('agamadanmoral', $agamadanmoral);
        }
        for ($i = 1; $i <= 6; $i++) {
            $bahasa = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('bahasa', $bahasa);
        }
        for ($i = 1; $i <= 7; $i++) {
            $kognitif = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('kognitif', $kognitif);
        }
        for ($i = 1; $i <= 5; $i++) {
            $motorik = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('motorik', $motorik);
        }
        for ($i = 1; $i <= 10; $i++) {
            $sosialemosional = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('sosialemosional', $sosialemosional);
        }
        for ($i = 1; $i <= 8; $i++) {
            $seni = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('seni', $seni);
        }
        // ekstra
        for ($i = 1; $i <= 7; $i++) {
            $ekstraagama = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstraagama', $ekstraagama);
        }
        for ($i = 1; $i <= 2; $i++) {
            $ekstrabahasajawa = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstrabahasajawa', $ekstrabahasajawa);
        }
        for ($i = 1; $i <= 4; $i++) {
            $ekstradrumbband = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstradrumbband', $ekstradrumbband);
        }
        for ($i = 1; $i <= 4; $i++) {
            $ekstramenari = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstramenari', $ekstramenari);
        }
        for ($i = 1; $i <= 3; $i++) {
            $ekstramenggambar = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 1,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstramenggambar', $ekstramenggambar);
        }
    }

    private function blueprintnilai2($siswa, $classes, $year, $bulan)
    {
        // semester2
        // aspek pengembangan
        for ($i = 1; $i <= 9; $i++) {
            $agamadanmoral = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('agamadanmoral', $agamadanmoral);
        }
        for ($i = 1; $i <= 6; $i++) {
            $bahasa = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('bahasa', $bahasa);
        }
        for ($i = 1; $i <= 7; $i++) {
            $kognitif = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('kognitif', $kognitif);
        }
        for ($i = 1; $i <= 5; $i++) {
            $motorik = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('motorik', $motorik);
        }
        for ($i = 1; $i <= 10; $i++) {
            $sosialemosional = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('sosialemosional', $sosialemosional);
        }
        for ($i = 1; $i <= 8; $i++) {
            $seni = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'kemampuan_id' => $i,
            ];
            $this->setting_m->inserttable('seni', $seni);
        }
        // ekstra
        for ($i = 1; $i <= 7; $i++) {
            $ekstraagama = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstraagama', $ekstraagama);
        }
        for ($i = 1; $i <= 2; $i++) {
            $ekstrabahasajawa = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstrabahasajawa', $ekstrabahasajawa);
        }
        for ($i = 1; $i <= 4; $i++) {
            $ekstradrumbband = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstradrumbband', $ekstradrumbband);
        }
        for ($i = 1; $i <= 4; $i++) {
            $ekstramenari = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstramenari', $ekstramenari);
        }
        for ($i = 1; $i <= 3; $i++) {
            $ekstramenggambar = [
                'siswa_id' => $siswa,
                'class_id' => $classes,
                'year_id' => $year,
                'semester' => 2,
                'bulan' => $bulan,
                'program_id' => $i,
            ];
            $this->setting_m->inserttable('ekstramenggambar', $ekstramenggambar);
        }
    }
}
