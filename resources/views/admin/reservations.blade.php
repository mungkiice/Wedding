@extends('admin.app')
@section('page', 'Reservation')
@section('section', 'Data Tables')
@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table</h3>
        </div>


        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Date</th>
                  <th>Packet</th>
                  <th>Vendors</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($reservations as $reservation)
               <tr>
                <td>{{$reservation->user->name}}</td>
                <td>{{date('D, d M Y', strtotime($reservation->date))}}</td>
                <td>{{$reservation->packet}}</td>
                <td>
                  <ol>
                    @foreach($reservation->vendors as $vendor)
                    <li>{{$vendor->name}}</li>
                    @endforeach
                  </ol>
                </td>
                <td style="text-align: right;">Rp. {{number_format($reservation->price)}}</td>
                <td>{{$reservation->status}}</td>
                <td style="max-width: 50px;">
                  <a style="width: 100%; margin-bottom: 5px;" class="btn btn-primary" href="/admin/reservation/{{$reservation->id}}/edit">Edit</a>
                  <br>
                  <a style="width: 100%" class="btn btn-danger" data-toggle="modal" data-target="#modal-warning-{{$reservation->id}}" href="">Delete</a>
                </td>
              </tr>
              <div class="modal modal-warning fade" id="modal-warning-{{$reservation->id}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Confirmation</h4>
                      </div>
                      <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus Reservasi Atas Nama "{{$reservation->user->name}}"?</p>
                      </div>
                      <div class="modal-footer">
                        <form method="POST" action="/admin/reservation/{{$reservation->id}}">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-outline">Yes</button>
                        </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                @endforeach
              </tbody>
<!--                 <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </tfoot> -->
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  @endsection