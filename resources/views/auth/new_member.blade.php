@extends('templates.main')

@section('content')
    
  <section id="memberInfo" class="d-flex justify-content-center align-items-center">
    <div class="container instruction">
      <h1 class="instruction-title text-center fw-bold mb-4">New Membership Instruction</h1>
      <p>Greetings, everyone!</p>
      <p>Welcome to the registration of SPE ITS SC 2021/2022 Membership.</p>
      <p class="mb-0">Before filling this form, please do the instructions below : </p>
        <ol type="1">
          <li><strong>Pay the registration fee</strong> (<em>Rp 35.000</em>).</li>
          <li><strong>Upload the twibbon</strong> and <strong>instagram story</strong> for Open Registration for Member SPE ITS SC on your Instagram account. <strong>Follow and tag</strong> <a href="https://www.instagram.com/speitssc/" target="_blank">@speitssc</a> and 3 of your friends. Make sure your account is <strong>not private</strong>.</li>
          <li>Upload the screenshot of your twibbon post and fee payment transaction.</li>
        </ol>
      <p class="mb-0">Payment can be done by transfer to :
      </p>
      <ul class="mb-0">
        <li><strong>BCA Bank</strong> : 7105039794 (<em>George Billy N</em>)</li>
        <li><strong>GoPay or OVO</strong> : 087898372360 (<em>George Billy</em>)</li>
      </ul>
      <p class="mb-0">Twibbon, caption, and snapgram video can be downloaded in the link as follows: <a href="https://speitssc.org/TermsforMember" target="_blank">https://speitssc.org/TermsforMember</a></p>
      <p>Member renewal fee applies for Members of SPE ITS SC 2020/2021</p>
      <p class="my-4">Don't hesitate to contact us if you need further information!</p>
      <div class="contact">
        <p class="mb-0">Contact Person :</p>
        <a href="http://line.me/ti/p/~george.nanlohy" class="d-inline text-decoration-none"><i class="fab fa-fw fa-line"></i> George</a>
        <br>
        <a href="http://line.me/ti/p/~nauvaln11" class="d-inline text-decoration-none"><i class="fab fa-fw fa-line"></i> Nauval</a>
        <a href="/register" class="float-end fw-bold fs-5 text-decoration-none">Next <i class="fas fa-caret-right fa-lg ms-1"></i></a>
      </div>
    </div>
    <div class="button-back">
      <i class="fas fa-3x fa-chevron-circle-left" onclick="window.history.back();"></i>
    </div>
  </section>

@endsection