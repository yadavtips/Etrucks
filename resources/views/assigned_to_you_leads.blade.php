@extends('layouts.app1')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row">
    <div class="col-md-12 xs-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recentely Added Leads</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead class="thead-dark">
                            
                            <tr>
                                <th>Job Id</th>
                                
                               
                                <th>View</th>
                                <th>Whatsapp</th>
                                <th>Make Call</th>
                              
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($app as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                              
                                <td><!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#{{ $c->created_at }}">
                                        View
                                      </button>
                                      
                                      <!-- Modal -->
                                      <div class="modal fade" id="{{ $c->created_at }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="{{ $c->created_at }}Title">View Lead</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                Phone: &nbsp;&nbsp; {{ $c->phone }} <br>
                                                Load From: &nbsp;&nbsp; {{ $c->load_from }}<br>
                                                Dispatch To: &nbsp;&nbsp; {{ $c->dispatch_to }}<br>
                                                Vehicle Type: &nbsp;&nbsp; {{$c->vehicle_type}}<br>
                                                Lead By: &nbsp;&nbsp; {{$c->name}}<br>
                                                Source of Lead:&nbsp;&nbsp;{{$c->lead_from}}<br>
                                                <br/>
                                                <br/>
                                                <form action="{{ route('job.update',$c->id) }}" method="POST" >
                                                    @csrf
                                                    @method('PUT')
                                                    
                                                    
                                                    <input type="hidden" id="custId" name="id" value="{{ $c->id}}">
                                                    <input type="hidden" id="custId" name="name" value="{{ $c->name}}">
                                                
                                                    
                                                        
                                                    
                                                     <br/>
                                                   {{--   <a href="tel:5551234567">Call (555)123-4567</a> --}}
                                                    
                                                </form>
                        
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div></td>
                               
                                    <td><a href="https://wa.me/91{{$c->phone}}?text=I'm%20interested%20in%20your%20car%20for%20sale"  style="font-size:25px;color:rgb(24, 170, 43)">
                                      <i class="fa fa-whatsapp"  style="font-size:25px;color:rgb(24, 170, 43)"></i></a>
                                  </td>
                              
                                   
                                   <td>
                                    <a href="tel:{{ $c->phone }}"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-plus" style="font-size:22px;color:indigo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.47 16.47 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM12.5 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H12V.5a.5.5 0 0 1 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M12 3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H13v2.5a.5.5 0 0 1-1 0v-3z"/>
                                      </svg></a>
                                   </td>

                              
                          
                                @endforeach
                            </tbody>
							
                        </table>
                              {{--   {!! $jobs->links() !!}  --}}
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script src="../assets/js/core/popper.min.js"></script>
                <script src="../assets/js/core/bootstrap.min.js"></script>
            
                <!-- jQuery UI -->
                <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
                <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
            
                <!-- jQuery Scrollbar -->
                <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
            
            
                <!-- Chart JS -->
                <script src="../assets/js/plugin/chart.js/chart.min.js"></script>
            
                <!-- jQuery Sparkline -->
                <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
            
                <!-- Chart Circle -->
                <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
            
                <!-- Datatables -->
                <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
            
                <!-- Bootstrap Notify -->
                <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
            
                <!-- jQuery Vector Maps -->
                <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
                <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
            
                <!-- Sweet Alert -->
                <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
            
                <!-- Atlantis JS -->
                <script src="../assets/js/atlantis.min.js"></script>
            
                <!-- Atlantis DEMO methods, don't include it in your project! -->
                <script src="../assets/js/setting-demo.js"></script>
                                @endsection