<?php include "./includes/header.php"?>

<div id="pageWrapper" class="Dashboard">
    <div class="container">
        <div class="MainRow">
            <?php include "./includes/DashboardMenu.php"?>
            <div class="MainSide accordion" id="AddAddressAcord">
                <div class="MainSideBox">
                    <div class="TitleSec">
                        <div class="Title">Select delivery address</div>
                        <a href="#" class="add-btn" data-bs-toggle="collapse" data-bs-target="#AddAddress"
                            aria-expanded="false" aria-controls="AddAddress">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                <path d="M14,28C6.3,28,0,21.7,0,14S6.3,0,14,0s14,6.3,14,14S21.7,28,14,28z M14,1C6.8,1,1,6.8,1,14c0,7.2,5.8,13,13,13
                                        c7.2,0,13-5.8,13-13C27,6.8,21.2,1,14,1z" />
                                <path d="M17.9,14.5v-1.3H15v-3.1h-1.4v3.1h-2.9v1.3h2.9v3.2H15v-3.3H17.9L17.9,14.5z" />
                            </svg>
                            Add New Address
                        </a>
                    </div>
                    <div class="accordion-item">
                        <div id="AddAddress" class="accordion-collapse collapse" data-bs-parent="#AddAddressAcord">
                            <div class="accordion-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="Name">Name</label>
                                                <input type="text" class="form-control" id="Name" name="Name"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="Name">Email</label>
                                                <input type="text" class="form-control" id="Email" name="Email"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="Name">Mobile Number</label>
                                                <input type="text" class="form-control" id="Mobile Number"
                                                    name="Mobile Number" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Name">Address</label>
                                                <textarea name="Address" class="form-control" id="Address" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="sbmitbtn combtn hoveranim">
                                        <span>Save address & proceed</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="addresslist">
                        <div class="listFlex">
                            <div class="listitm">
                                <div class="Box">
                                    <input id="Address1" checked type="radio" name="address">
                                    <label for="Address1">
                                        <div class="BoxHeader">
                                            <div class="Name">
                                                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 94.5 118.9">
                                                    <path d="M83.9,17.7c-1.7-2.1-4.4-4.8-8.1-7.9C64.7,1,52.2-1.5,39.3,0.8C19.8,4.3,6.6,16.1,1.6,35.5c-4.9,19.3,1.5,35.3,16.4,48.1
                                                        c8.7,7.5,17.2,15.2,26,23.1v12.2h6.4v-11.8c1.4-1.3,2.6-2.4,3.8-3.5c9-8.2,18.3-16,26.8-24.7C98,62,98.9,36.2,83.9,17.7z
                                                        M74.6,72.7c-8.5,8.6-17.8,16.5-27.1,25.1c-9.6-8.7-19-16.4-27.6-25.1c-15.8-16-14-41.1,3.4-55.1C40.9,3.5,66,7.2,78.4,25.7
                                                        C88.9,41.2,87.7,59.4,74.6,72.7z" />
                                                    <circle cx="47.3" cy="46.7" r="7.3" />
                                                </svg>
                                                SHIPPING ADDRESS
                                            </div>
                                            <div class="button-box">
                                                <svg id="edit" viewBox="0 0 511.984 511.984" data-bs-toggle="modal"
                                                    data-bs-target="#newAddress">
                                                    <path
                                                        d="m415 221.984c-8.284 0-15 6.716-15 15v220c0 13.785-11.215 25-25 25h-320c-13.785 0-25-11.215-25-25v-320c0-13.785 11.215-25 25-25h220c8.284 0 15-6.716 15-15s-6.716-15-15-15h-220c-30.327 0-55 24.673-55 55v320c0 30.327 24.673 55 55 55h320c30.327 0 55-24.673 55-55v-220c0-8.284-6.716-15-15-15z" />
                                                    <path
                                                        d="m501.749 38.52-28.285-28.285c-13.645-13.646-35.849-13.646-49.497 0l-226.273 226.274c-2.094 2.094-3.521 4.761-4.103 7.665l-14.143 70.711c-.983 4.918.556 10.002 4.103 13.548 2.841 2.841 6.668 4.394 10.606 4.394.979 0 1.963-.096 2.941-.291l70.711-14.143c2.904-.581 5.571-2.009 7.665-4.103l226.275-226.273s.001 0 .001-.001c13.645-13.645 13.645-35.849-.001-49.496zm-244.276 251.346-44.194 8.84 8.84-44.194 184.17-184.173 35.356 35.356zm223.063-223.062-17.678 17.678-35.356-35.356 17.677-17.677c1.95-1.95 5.122-1.951 7.072-.001l28.284 28.285c1.951 1.949 1.951 5.122.001 7.071z" />
                                                </svg>
                                                <svg id="delete" viewBox="0 0 512 512">
                                                    <path
                                                        d="M436,60h-75V45c0-24.813-20.187-45-45-45H196c-24.813,0-45,20.187-45,45v15H76c-24.813,0-45,20.187-45,45
                                                                        c0,19.928,13.025,36.861,31.005,42.761L88.76,470.736C90.687,493.875,110.385,512,133.604,512h244.792
                                                                        c23.22,0,42.918-18.125,44.846-41.271l26.753-322.969C467.975,141.861,481,124.928,481,105C481,80.187,460.813,60,436,60z M181,45
                                                                        c0-8.271,6.729-15,15-15h120c8.271,0,15,6.729,15,15v15H181V45z M393.344,468.246c-0.643,7.712-7.208,13.754-14.948,13.754
                                                                        H133.604c-7.739,0-14.305-6.042-14.946-13.747L92.294,150h327.412L393.344,468.246z M436,120H76c-8.271,0-15-6.729-15-15
                                                                        s6.729-15,15-15h360c8.271,0,15,6.729,15,15S444.271,120,436,120z" />
                                                    <path
                                                        d="M195.971,436.071l-15-242c-0.513-8.269-7.67-14.558-15.899-14.043c-8.269,0.513-14.556,7.631-14.044,15.899l15,242.001
                                                                        c0.493,7.953,7.097,14.072,14.957,14.072C189.672,452,196.504,444.684,195.971,436.071z" />
                                                    <path
                                                        d="M256,180c-8.284,0-15,6.716-15,15v242c0,8.284,6.716,15,15,15s15-6.716,15-15V195C271,186.716,264.284,180,256,180z" />
                                                    <path
                                                        d="M346.927,180.029c-8.25-0.513-15.387,5.774-15.899,14.043l-15,242c-0.511,8.268,5.776,15.386,14.044,15.899
			                                                            c8.273,0.512,15.387-5.778,15.899-14.043l15-242C361.483,187.659,355.196,180.541,346.927,180.029z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                Intersmart Solutions <br>
                                                2nd floor <br>
                                                <!-- Lillys tower<br>
                                                Palarivattom -->
                                            </li>
                                            <li>
                                                9568987956
                                            </li>
                                        </ul>
                                    </label>
                                </div>
                            </div>
                            <div class="listitm">
                                <div class="Box">
                                    <input id="Address2" type="radio" name="address">
                                    <label for="Address2">
                                        <div class="BoxHeader">
                                            <div class="Name">
                                                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 94.5 118.9">
                                                    <path d="M83.9,17.7c-1.7-2.1-4.4-4.8-8.1-7.9C64.7,1,52.2-1.5,39.3,0.8C19.8,4.3,6.6,16.1,1.6,35.5c-4.9,19.3,1.5,35.3,16.4,48.1
                                                        c8.7,7.5,17.2,15.2,26,23.1v12.2h6.4v-11.8c1.4-1.3,2.6-2.4,3.8-3.5c9-8.2,18.3-16,26.8-24.7C98,62,98.9,36.2,83.9,17.7z
                                                        M74.6,72.7c-8.5,8.6-17.8,16.5-27.1,25.1c-9.6-8.7-19-16.4-27.6-25.1c-15.8-16-14-41.1,3.4-55.1C40.9,3.5,66,7.2,78.4,25.7
                                                        C88.9,41.2,87.7,59.4,74.6,72.7z" />
                                                    <circle cx="47.3" cy="46.7" r="7.3" />
                                                </svg>
                                                SHIPPING ADDRESS
                                            </div>
                                            <div class="button-box">
                                                <svg id="edit" viewBox="0 0 511.984 511.984" data-bs-toggle="modal"
                                                    data-bs-target="#newAddress">
                                                    <path
                                                        d="m415 221.984c-8.284 0-15 6.716-15 15v220c0 13.785-11.215 25-25 25h-320c-13.785 0-25-11.215-25-25v-320c0-13.785 11.215-25 25-25h220c8.284 0 15-6.716 15-15s-6.716-15-15-15h-220c-30.327 0-55 24.673-55 55v320c0 30.327 24.673 55 55 55h320c30.327 0 55-24.673 55-55v-220c0-8.284-6.716-15-15-15z" />
                                                    <path
                                                        d="m501.749 38.52-28.285-28.285c-13.645-13.646-35.849-13.646-49.497 0l-226.273 226.274c-2.094 2.094-3.521 4.761-4.103 7.665l-14.143 70.711c-.983 4.918.556 10.002 4.103 13.548 2.841 2.841 6.668 4.394 10.606 4.394.979 0 1.963-.096 2.941-.291l70.711-14.143c2.904-.581 5.571-2.009 7.665-4.103l226.275-226.273s.001 0 .001-.001c13.645-13.645 13.645-35.849-.001-49.496zm-244.276 251.346-44.194 8.84 8.84-44.194 184.17-184.173 35.356 35.356zm223.063-223.062-17.678 17.678-35.356-35.356 17.677-17.677c1.95-1.95 5.122-1.951 7.072-.001l28.284 28.285c1.951 1.949 1.951 5.122.001 7.071z" />
                                                </svg>
                                                <svg id="delete" viewBox="0 0 512 512">
                                                    <path
                                                        d="M436,60h-75V45c0-24.813-20.187-45-45-45H196c-24.813,0-45,20.187-45,45v15H76c-24.813,0-45,20.187-45,45
                                                                        c0,19.928,13.025,36.861,31.005,42.761L88.76,470.736C90.687,493.875,110.385,512,133.604,512h244.792
                                                                        c23.22,0,42.918-18.125,44.846-41.271l26.753-322.969C467.975,141.861,481,124.928,481,105C481,80.187,460.813,60,436,60z M181,45
                                                                        c0-8.271,6.729-15,15-15h120c8.271,0,15,6.729,15,15v15H181V45z M393.344,468.246c-0.643,7.712-7.208,13.754-14.948,13.754
                                                                        H133.604c-7.739,0-14.305-6.042-14.946-13.747L92.294,150h327.412L393.344,468.246z M436,120H76c-8.271,0-15-6.729-15-15
                                                                        s6.729-15,15-15h360c8.271,0,15,6.729,15,15S444.271,120,436,120z" />
                                                    <path
                                                        d="M195.971,436.071l-15-242c-0.513-8.269-7.67-14.558-15.899-14.043c-8.269,0.513-14.556,7.631-14.044,15.899l15,242.001
                                                                        c0.493,7.953,7.097,14.072,14.957,14.072C189.672,452,196.504,444.684,195.971,436.071z" />
                                                    <path
                                                        d="M256,180c-8.284,0-15,6.716-15,15v242c0,8.284,6.716,15,15,15s15-6.716,15-15V195C271,186.716,264.284,180,256,180z" />
                                                    <path
                                                        d="M346.927,180.029c-8.25-0.513-15.387,5.774-15.899,14.043l-15,242c-0.511,8.268,5.776,15.386,14.044,15.899
			                                                            c8.273,0.512,15.387-5.778,15.899-14.043l15-242C361.483,187.659,355.196,180.541,346.927,180.029z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                Intersmart Solutions <br>
                                                2nd floor <br>
                                                Lillys tower<br>
                                                Palarivattom
                                            </li>
                                            <li>
                                                9568987956
                                            </li>
                                        </ul>
                                    </label>
                                </div>
                            </div>
                            <div class="listitm">
                                <div class="Box">
                                    <input id="Address3" type="radio" name="address">
                                    <label for="Address3">
                                        <div class="BoxHeader">
                                            <div class="Name">
                                                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 94.5 118.9">
                                                    <path d="M83.9,17.7c-1.7-2.1-4.4-4.8-8.1-7.9C64.7,1,52.2-1.5,39.3,0.8C19.8,4.3,6.6,16.1,1.6,35.5c-4.9,19.3,1.5,35.3,16.4,48.1
                                                        c8.7,7.5,17.2,15.2,26,23.1v12.2h6.4v-11.8c1.4-1.3,2.6-2.4,3.8-3.5c9-8.2,18.3-16,26.8-24.7C98,62,98.9,36.2,83.9,17.7z
                                                        M74.6,72.7c-8.5,8.6-17.8,16.5-27.1,25.1c-9.6-8.7-19-16.4-27.6-25.1c-15.8-16-14-41.1,3.4-55.1C40.9,3.5,66,7.2,78.4,25.7
                                                        C88.9,41.2,87.7,59.4,74.6,72.7z" />
                                                    <circle cx="47.3" cy="46.7" r="7.3" />
                                                </svg>
                                                SHIPPING ADDRESS
                                            </div>
                                            <div class="button-box">
                                                <svg id="edit" viewBox="0 0 511.984 511.984" data-bs-toggle="modal"
                                                    data-bs-target="#newAddress">
                                                    <path
                                                        d="m415 221.984c-8.284 0-15 6.716-15 15v220c0 13.785-11.215 25-25 25h-320c-13.785 0-25-11.215-25-25v-320c0-13.785 11.215-25 25-25h220c8.284 0 15-6.716 15-15s-6.716-15-15-15h-220c-30.327 0-55 24.673-55 55v320c0 30.327 24.673 55 55 55h320c30.327 0 55-24.673 55-55v-220c0-8.284-6.716-15-15-15z" />
                                                    <path
                                                        d="m501.749 38.52-28.285-28.285c-13.645-13.646-35.849-13.646-49.497 0l-226.273 226.274c-2.094 2.094-3.521 4.761-4.103 7.665l-14.143 70.711c-.983 4.918.556 10.002 4.103 13.548 2.841 2.841 6.668 4.394 10.606 4.394.979 0 1.963-.096 2.941-.291l70.711-14.143c2.904-.581 5.571-2.009 7.665-4.103l226.275-226.273s.001 0 .001-.001c13.645-13.645 13.645-35.849-.001-49.496zm-244.276 251.346-44.194 8.84 8.84-44.194 184.17-184.173 35.356 35.356zm223.063-223.062-17.678 17.678-35.356-35.356 17.677-17.677c1.95-1.95 5.122-1.951 7.072-.001l28.284 28.285c1.951 1.949 1.951 5.122.001 7.071z" />
                                                </svg>
                                                <svg id="delete" viewBox="0 0 512 512">
                                                    <path
                                                        d="M436,60h-75V45c0-24.813-20.187-45-45-45H196c-24.813,0-45,20.187-45,45v15H76c-24.813,0-45,20.187-45,45
                                                                        c0,19.928,13.025,36.861,31.005,42.761L88.76,470.736C90.687,493.875,110.385,512,133.604,512h244.792
                                                                        c23.22,0,42.918-18.125,44.846-41.271l26.753-322.969C467.975,141.861,481,124.928,481,105C481,80.187,460.813,60,436,60z M181,45
                                                                        c0-8.271,6.729-15,15-15h120c8.271,0,15,6.729,15,15v15H181V45z M393.344,468.246c-0.643,7.712-7.208,13.754-14.948,13.754
                                                                        H133.604c-7.739,0-14.305-6.042-14.946-13.747L92.294,150h327.412L393.344,468.246z M436,120H76c-8.271,0-15-6.729-15-15
                                                                        s6.729-15,15-15h360c8.271,0,15,6.729,15,15S444.271,120,436,120z" />
                                                    <path
                                                        d="M195.971,436.071l-15-242c-0.513-8.269-7.67-14.558-15.899-14.043c-8.269,0.513-14.556,7.631-14.044,15.899l15,242.001
                                                                        c0.493,7.953,7.097,14.072,14.957,14.072C189.672,452,196.504,444.684,195.971,436.071z" />
                                                    <path
                                                        d="M256,180c-8.284,0-15,6.716-15,15v242c0,8.284,6.716,15,15,15s15-6.716,15-15V195C271,186.716,264.284,180,256,180z" />
                                                    <path
                                                        d="M346.927,180.029c-8.25-0.513-15.387,5.774-15.899,14.043l-15,242c-0.511,8.268,5.776,15.386,14.044,15.899
			                                                            c8.273,0.512,15.387-5.778,15.899-14.043l15-242C361.483,187.659,355.196,180.541,346.927,180.029z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                Intersmart Solutions <br>
                                                2nd floor <br>
                                                Lillys tower<br>
                                                Palarivattom
                                            </li>
                                            <li>
                                                9568987956
                                            </li>
                                        </ul>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include "./includes/footer.php"?>


<div class="modal fade newaddress ComnModal" id="newAddress" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="ModalHeader">
                <div class="title">
                    Add New address
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="FirstName" name="FirstName"
                                    placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="LastName" name="LastName"
                                    placeholder="Last Name" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Email" name="email" placeholder="Email"
                                    required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="MobileNumber" name="MobileNumber"
                                    placeholder="Mobile Number" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="Address" id="Address" placeholder="Address" class="form-control"
                                    cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="BtnSec">
                        <button type="submit" class="LogBtn btn">Save address & Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>