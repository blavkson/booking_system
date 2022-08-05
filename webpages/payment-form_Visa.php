

<!-- Appointment stylesheet -->
<link rel="stylesheet" href="../css/appointment.css">

<div class="container">
    <form method="post" id= "payment-form_Visa"action="appointment.php">

        <!-- CUSTOMER DETAILS -->

		<div class="customer-details" id="customer_tab">

            <div class="text_header">
                <span>
                   customer Details
                </span>
            </div>

        <div>
        <div class="form-group">
             <div class="col-sm-6">
                <input type="text" name="client_first_name" id="client_first_name" class="form-control" placeholder="First Name">
                <span class = "invalid-feedback">This field is required</span>
             </div>
             <div class="col-sm-6">
               <input type="text" name="client_last_name" id="client_last_name" class="form-control" placeholder="Last Name">
               <span class = "invalid-feedback">This field is required</span>
             </div>
             <div class="col-sm-6">
                <input type="email" name="client_email" id="client_email" class="form-control" placeholder="E-mail">
                <span class = "invalid-feedback">Invalid E-mail</span>
             </div>
             <div class="col-sm-6">
                <input type="text"  name="client_phone_number" id="client_phone_number" class="form-control" placeholder="Phone number">
                <span class = "invalid-feedback">Invalid phone number</span>
             </div>
         </div>

			<!-- NEXT AND PREVIOUS BUTTONS -->

			<div style="overflow:auto;padding: 30px 0px;">
    			<div style="float:right;">
    				<input type="hidden" name="submit_book_appointment_form">
      				<button type="button" id="prevBtn"  class="next_prev_buttons" style="background-color: #bbbbbb;"  onclick="nextPrev(-1)">Previous</button>
      				<button type="button" id="nextBtn" class="next_prev_buttons" onclick="nextPrev(1)">Next</button>
    			</div>
  			</div>

  			<!-- Circles which indicates the steps of the form: -->

  			<div style="text-align:center;margin-top:40px;">
    			<span class="step"></span>
    			<span class="step"></span>
  			</div>


    </form>
</div>