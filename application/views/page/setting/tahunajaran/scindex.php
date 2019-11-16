<script>
    function inputSelect(id) {
        this.id = id
        this.selectingbaru = function() {
            return `<div class="form-group">
                        <input type="hidden" name="year_id" value="${this.id}">
                        <select name="status" class="form-control" required>
                            <option value="">-Ubah Status Menjadi-</option>
                            <option value="Aktif">Aktif</option>
                        </select>
                    </div>`;
        }
        this.selectingaktif = function() {
            return `<div class="form-group">
                        <input type="hidden" name="year_id" value="${this.id}">
                        <select name="status" class="form-control" required>
                            <option value="">-Ubah Status Menjadi-</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>`;
        }
    }

    $('.badge-update-status').click(function() {
        const id = $(this).attr('year_id');
        const status = $(this).attr('status');

        const target = document.querySelector('#target');
        if (status == 'Baru') {
            let data = new inputSelect(id);
            target.innerHTML = data.selectingbaru();
        } else {
            let data = new inputSelect(id);
            target.innerHTML = data.selectingaktif();
        }
    })

    $('.edit').click(function() {
        const year_id = $(this).attr('year_id');
        const yearname = $(this).attr('yearname');

        $('[name="year_id"]').val(year_id);
        $('[name="yearname"]').val(yearname);
    })
</script>