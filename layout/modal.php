<!-- Interest Modal -->
<div class="modal fade" id="interestModal" tabindex="-1" aria-labelledby="interestModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="whitebox">
        <div class="widget logincontainer shadow text-center text-md-start">
          <div class="modal-header border-0 pb-0">
            <h3 class="modal-title darkcolor bottom25"  id="interestModalLabel">Express Your Interest </h3>
           
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pt-0">
            <p class="mb-4 textgry">Thank you for showing interest in our product. Please leave your details below:</p>
            <form class="getin_form border-form" id="interestForm">
              <div class="mb-3">
                
                <input type="text" class="form-control" id="modal-name" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
              
                <input type="email" class="form-control" id="modal-email" placeholder="your@email.com" required>
              </div>
              <div class="mb-4">
                
                <textarea class="form-control" id="modal-message" rows="3" placeholder="I'm interested in..." required></textarea>
              </div>
              <div class="d-flex justify-content-center justify-content-md-start">
                <button type="submit" class="button btn-primary">Send</button>
                <button type="button" class="button btn-dark ms-2" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
