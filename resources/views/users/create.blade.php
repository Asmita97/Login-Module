
<form action="store" method="post">
                             <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/><!-- End Btn2 -->
                               

                           <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
             Modal Header 
         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> 
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel"> Details</h4>
            </div>
            

            <!-- Modal Body -->

            <div class="modal-body">
                

                <form role="form">

                  <div class="form-group">
<!--                    <label for="exampleInputName">First Name</label>-->
                      <input type="text" class="form-control"
                      id="exampleInputName" name="firstname" placeholder="First Name" required/>
                  </div>
                  <div class="form-group">


<!--                  <label for="exampleInputCompany">Last Name</label>-->

                      <input type="text" class="form-control"
                          id="exampleInputDate" name="lastname" placeholder=" Last Name" required/>
                  </div>

                    <div class="form-group">
<!--                    <label for="exampleInputNo">Phone No</label>-->
                      <input type="number" class="form-control"
                          id="exampleInputDate1" name="phone" placeholder="Phone No." required/>
                  </div>
            <div class="form-group">
<!--                    <label for="exampleInputAddress">Email</label>-->
                      <input type="email" class="form-control"
                          id="exampleInputemail" name="email" placeholder="Email address" required/>
                  </div>
                    <div class="form-group">
<!--                    <label for="exampleInputBalance">Password</label>-->
                      <input type="password" class="form-control"
                          id="pwd" name="password" placeholder="Password" required/>
                  </div>
<!--
                    <div class="form-group">
                    <label for="exampleInputBalance">Password</label>
                      <input type="password" class="form-control"
                          id="confirmpwd" name="cpassword" placeholder="ConfirmPassword" required/>
                  </div>
-->

                  <button type="submit" class="btn btn-sm" id="btn0">Submit</button>
                </form>
                
                
            
           
                <button type="button" class="btn btn-sm"
                        data-dismiss="modal">
                            Close
                </button>
    </form>

                
            </div>
        </div>
    </div>
</div>

                           
                    </form>
   