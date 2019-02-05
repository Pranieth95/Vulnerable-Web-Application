<?php
if($_GET['store']=="Over"){
  echo '
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="styles/jquery.bpopup.min.js"></script>
    <button id="usrButtonHint" type="button" class="newsletter_submit_btn trans_300" data-toggle="modal" style="background:#17a2b8;" data-target="#HintModalCenter">
        Reveal Hint
    </button>

    <div class="modal fade" id="HintModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="background:#1a1a1a;color:white;">
                  <p >By revealing the hint by clicking the below button will effect on reducing the score you takes for the challenge. results in 50% of the score. </p>
                  <p id="no"> <i> I am Aware and Reveal the Hint.</i></p>
                </div>
                <div class="modal-footer">
                    <button id="revealHintUsr" name="revealHint" type="submit" data-dismiss="modal" class="btn btn-primary btn-sm" style="background:#ffb606; border-color:#ffb606" value="Submit">Reveal The Hint
                    </button >
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="background:#1a1a1a">Close and Do Not Reveal</button>
                </div>
              </div>
        </div>
    </div>

  ';
}else{
  echo '
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oh snap!</strong> Error Occurred and try submitting again.
      </div>
  ';
}

?>