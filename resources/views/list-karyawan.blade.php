@extends('layout.master')
@section('title')
List Karyawan
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css"
    href="{{asset('template/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('template/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('template/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/pages/data-list-view.css')}}">
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Karyawan</h4>
                            <a href="{{route('karyawan.create')}}" class="btn btn-icon btn-outline-primary float-right"><i
                                    class="feather icon-user-plus"></i></a>

                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nomor Induk</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tanggal lahir</th>
                                                <th>Tanggal gabung</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($karyawan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->no_induk }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{date('d F Y',strtotime( $item->tgl_lahir))}}</td>
                                                <td>{{date('d F Y',strtotime( $item->tgl_gabung))}}</td>
                                                <td>
                                                    <a href="{{route('karyawan.edit',$item->id)}}" class="avatar bg-success" title="Edit">
                                                        <div href="#" class="avatar-content">
                                                            <i class="avatar-icon text-white feather icon-edit-2"></i>
                                                        </div>
                                                    </a>
                                                    <a class="avatar bg-danger" title="Delete"
                                                        onclick="alertConfirm({{ $item->id }})">
                                                        <div class="avatar-content">
                                                            <i class="avatar-icon text-white feather icon-trash-2"></i>
                                                        </div>
                                                    </a>
                                                    <form id="delForm{{$item->id}}" action="{{route('karyawan.destroy',$item->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>
@endsection

@push('plugin-scripts')
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/ui/data-list-view.js')}}"></script>

<script>
    function alertConfirm(id) {
        var delID = '#delForm' + id;
        console.log(delID)
        swal({
                title: "Apakah anda yakin?",
                text: "Yakin menghapus Data Karyawan ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $(delID).submit();
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }

    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    tinymce.init({
        selector: 'textarea#desc',
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help fullscreen'
        ],
        toolbar: 'styleselect fullscreen | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
        menubar: 'file edit format tools table',
    });

</script>
@endpush
