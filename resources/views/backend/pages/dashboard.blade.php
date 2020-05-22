@extends('backend.layout.app')

@section('content')
      <div class="main-content">
                <div class="data-table-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-2">Contact Inquiry</h4>



                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>


                                            <tbody>

                        @foreach ($contactlist as $item)
                            
                            <tr>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['email']}}</td>
                                <td>{{$item['subject']}}</td>
                                <td>{{$item['message']}}</td>
                                <td>
                                   <?php echo date('d-M-y', strtotime($item['created_at']));?>
                                
                               </td>
                                <td><a href="mailto:{{$item['email']}}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                </td>
                                </tr>
                                @endforeach
                                                
                                              
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                       
                    </div>
                </div>

                <!-- Footer Area -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p>Created by @<a href="#">Theme-zome</a></p>
                                </div>
                                <div class="fotter-icon text-center">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Pinterest">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Instagram">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
@endsection