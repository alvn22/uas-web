<!-- Delete Modal-->
    <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="/division/{{ $item->id }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                        <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Yakin ingin menghapus data<br>{{ $item->nama_divisi }}?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger" href="">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>