@extends('admin.layout.app')
@section('content')
<div class="card">
   
    <!-- /.card-header -->

    <div class="card-body">
      <div class="button" style="margin-bottom: 0px;">
        <a href="{{route('admin.add')}}" class="btn btn-primary">Tambah Data</a>
      </div>
      <table id="example1" class="table table-bordered table-striped">
      

        <thead>
        <tr>
          <th>Nama Mempelai</th>
          <th>Akad Nikah</th>
          <th>Status</th>
          <th class="text-center">Aksi</th>
          
        </tr>
        </thead>
        <tbody>
          @foreach ($greenNatural as $item)
          <tr>
            <td>{{$item->groom_nick_name}} & {{$item->bride_nick_name}}</td>
            <td>{{ \Carbon\Carbon::parse($item->akad_date_start)->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}
            </td>
            <td></td>
            <td class="text-center">
              <div class="col">
                <a style="text-decoration: none; color: black;" href="{{route('show', $item->slug)}}"><ion-icon name="link-outline"></ion-icon></a>
                <a style="text-decoration: none; color: black;" href=""><ion-icon name="pencil-outline"></ion-icon></a>
                <a style="text-decoration: none; color: black;" href=""><ion-icon name="trash-outline"></ion-icon></a>
              </div>
              
            </td> 
          </tr>
          @endforeach
        </tbody>
     
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection