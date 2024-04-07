<footer class="mt-5">
  <form class="w-50 mx-auto text-white p-3">
    <!-- Email input -->
    <div class="form-outline mb-4 mt-5">
      <h5 class="text-center mb-3">Got Concerns? Send us an email</h5>
      <label class="form-label" for="form6Example5">Email</label>
      <input type="email" id="form6Example5" class="form-control" />
    </div>

    <!-- Message input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Additional information</label>
      <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
      Send Message
    </button>
  </form>

  <section class="d-flex justify-content-evenly align-items-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
    <div class="p-3 text-white">
      © <?= date("Y") ?> Copyright
    </div>
    <div class="social-wrapper d-flex gap-3">
      <img height="50px" src="../assets/facebook.svg" alt="">
      <img height="50px" src="../assets/github.svg" alt="">
      <img height="50px" src="../assets/x-twitter.svg" alt="">
    </div>
  </section>
</footer>


</body>

</html>