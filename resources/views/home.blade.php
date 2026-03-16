@extends('layouts.app')

@section('content')
<div class="w-100 overflow-hidden bg-gray-100" id="top">

  <div class="container position-relative">
    <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
      style="background-image: url('{{ asset('img/buddy-an.jpg') }}');">

    </div>
    <div class="row">

      <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
        <h1 class="display-1 fw-bold mt-5">Για όσους δεν κάνουν εκπτώσεις στην ποιότητα!</h1>
        <p class="lead">Στην οικοδομή δεν χωρούν συμβιβασμοί. Χρειάζεσαι υλικά που αντέχουν. Εργαλεία που αποδίδουν. Συνεργάτες που ξέρουν.</p>
      </div>



    </div>
  </div>

</div>

<div class="py-vh-5 w-100 overflow-hidden" id="services">
  <div class="container">
    <div class="row d-flex justify-content-end">
      <div class="col-lg-8" data-aos="fade-down">
        <h2 class="display-6">Δομικά υλικά, χρώματα και επαγγελματικός εξοπλισμός επιλεγμένα για απαιτητικά έργα και σοβαρά αποτελέσματα.</h2>
      </div>
    </div>
    <div class="row d-flex align-items-center">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <span class="h5 fw-lighter border-bottom border-dark">ASE οικοδομικά μηχανήματα</span>
        <img src="{{ asset('img/asemakine.webp') }}" alt="ASE Logo" class="img-fluid py-3">
        <h3 class="py-2">Αποκλειστική αντιπρόσωπος στην Ελλάδα</h3>
        <p>Στην εταιρεία μας διαθέτουμε αποκλειστική συνεργασία με την ASE Makine, έναν από τους πιο αξιόπιστους κατασκευαστές εξοπλισμού στον χώρο των οικοδομικών και βιομηχανικών εφαρμογών. Μέσα από αυτή τη συνεργασία προσφέρουμε στους πελάτες μας αυθεντικά προϊόντα ASE Makine, εγγυημένη ποιότητα κατασκευής και τεχνική υποστήριξη, καλύπτοντας τις ανάγκες τόσο των επαγγελματιών όσο και των απαιτητικών έργων.</p>

        <a href="{{ route('ase.index') }}" class="link-fancy">
          Περισσότερα
        </a>

      </div>

      <div class="col-md-6 col-lg-4 py-vh-4 pb-0" data-aos="fade-up" data-aos-delay="400">
        <span class="h5 fw-lighter">Επώνυμες λύσεις</span>
        <h3 class="py-5 border-top border-dark">Όλα για Κατασκευές & Ανακαινίσεις</h3>
        <p>
          Στο κατάστημά μας θα βρείτε προϊόντα κορυφαίας ποιότητας από τις πιο αξιόπιστες μάρκες στον χώρο των οικοδομικών υλικών και εργαλείων. Προσφέρουμε Isomat για οικοδομικά και στεγανωτικά, OneColor για χρώματα και επιχρίσματα, Knauf για γυψοσανίδες και συστήματα εσωτερικών χώρων, Work-Pro για εργαλεία και αξεσουάρ υψηλής αντοχής και Festool για επαγγελματικά ηλεκτρικά εργαλεία με ακρίβεια και αξιοπιστία. Καλύπτουμε κάθε ανάγκη για κατασκευές, ανακαινίσεις και επαγγελματική χρήση με προϊόντα που εγγυώνται ποιότητα και διάρκεια.
        </p>
      </div>

      <div class="col-md-6 col-lg-4 py-vh-6 pb-0" data-aos="fade-up" data-aos-delay="600">
        <span class="h5 fw-lighter">Ότι χρειάζεστε για το μάρμαρο</span>
        <h3 class="py-5 border-top border-dark">Apollon & Tenax: Ποιότητα για Μάρμαρο</h3>
        <p>Στο κατάστημά μας θα βρείτε εξειδικευμένα προϊόντα για την επεξεργασία, συγκόλληση και συντήρηση μαρμάρου, καλύπτοντας τις ανάγκες τόσο των επαγγελματιών όσο και των απαιτητικών έργων. Διαθέτουμε προϊόντα υψηλής ποιότητας από τις κορυφαίες εταιρείες Apollon και Tenax, γνωστές για την αξιοπιστία, την αντοχή και την άριστη απόδοση στα υλικά πέτρας και μαρμάρου.</p>
      </div>
    </div>

    <div class="row d-flex align-items-center">
      <div class="col-md text-center">
        <img src="{{ asset('img/onecolor.png') }}" alt="OneColor Logo" class="img-fluid">
      </div>
      <div class="col-md text-center">
        <img src="{{ asset('img/isomat.svg') }}" alt="Isomat Logo" class="img-fluid">
      </div>
      <div class="col-md text-center">
        <img src="{{ asset('img/knauf.svg') }}" alt="Knauf Logo" class="img-fluid">
      </div>
      <div class="col-md text-center">
        <img src="{{ asset('img/work-pro.webp') }}" alt="Work-Pro Logo" class="img-fluid">
      </div>
      <div class="col-md text-center">
        <img src="{{ asset('img/festool.svg') }}" alt="Festool Logo" class="img-fluid">
      </div>
      <div class="col-md text-center">
        <img src="{{ asset('img/kumatsugen.png') }}" alt="Kumatsugen Logo" class="img-fluid">
      </div>
    </div>
  </div>

</div>
</div>

<div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
  <div class="container">

    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-lg-6">
        <div class="row gx-5 d-flex">
          <div class="col-md-11">
            <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end" data-aos="fade-right"
              style="background-image: url('{{ asset('img/paints.jpeg') }}');--bs-aspect-ratio: 50%;">
            </div>
          </div>
          <div class="col-md-5 offset-md-1">
            <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end" data-aos="fade-up"
              style="background-image: url('{{ asset('img/tools.jpg') }}');">
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left"
              style="background-image: url('{{ asset('img/store.jpeg') }}');--bs-aspect-ratio: 150%;">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h3 class="py-5 border-top border-dark" data-aos="fade-left">Χτίζουμε μαζί κάθε σας ιδέα</h3>
        <p data-aos="fade-left" data-aos-delay="200">Η Οικοδομική Γωνιά δημιουργήθηκε με στόχο να αποτελέσει ένα ολοκληρωμένο σημείο αναφοράς για κάθε ανάγκη στον χώρο της οικοδομής και της ανακαίνισης. Με αγάπη για το αντικείμενο και σεβασμό προς τον επαγγελματία και τον ιδιώτη, προσφέρουμε ποιοτικά δομικά υλικά, χρώματα και κάθε είδους εργαλεία που καλύπτουν ακόμη και τις πιο απαιτητικές εργασίες.
        </p>
        <p data-aos="fade-left" data-aos-delay="200">Στην Οικοδομική Γωνιά πιστεύουμε ότι κάθε έργο — μικρό ή μεγάλο — αξίζει τα σωστά υλικά και την κατάλληλη υποστήριξη. Γι' αυτό επιλέγουμε αξιόπιστα προϊόντα και φροντίζουμε να παρέχουμε σωστή καθοδήγηση, άμεση εξυπηρέτηση και ανταγωνιστικές τιμές.
        </p>
      </div>
    </div>

  </div>
</div>

<div class="position-relative overflow-hidden w-100 bg-light" id="gallery">
  <div class="container-fluid">
    <div class="row overflow-scroll">
      <div class="col-12">
        <div class="row vw-100 px-0 py-vh-2 d-flex align-items-center scrollx">
          <div class="col-md-3" data-aos="fade-up">
            <img src="{{ asset('img/img1.jpg') }}" class="img-fluid rounded shadow" alt="nice gallery image">
          </div>

          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('img/img2.jpg') }}" class="img-fluid rounded shadow" alt="nice gallery image">
          </div>

          <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('img/img3.jpg') }}" class="img-fluid rounded shadow" alt="nice gallery image">
          </div>
        </div>
        <div class="row vw-100 px-0 py-vh-2 d-flex align-items-center scrollx">
          <div class="col-md-3" data-aos="fade-up">
            <img src="{{ asset('img/img4.jpg') }}" class="img-fluid rounded shadow" alt="nice gallery image">
          </div>

          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('img/img5.jpg') }}" class="rounded shadow img-fluid" alt="nice gallery image">
          </div>

          <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('img/img6.jpg') }}" class="rounded shadow img-fluid" alt="nice gallery image">
          </div>
        </div>
        <div class="row vw-100 px-0 py-vh-2 d-flex align-items-center scrollx">

          <div class="col-md-3" data-aos="fade-up">
            <img src="{{ asset('img/img7.jpg') }}" class="rounded shadow img-fluid" alt="nice gallery image">
          </div>

          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('img/img8.jpg') }}" class="rounded shadow img-fluid" alt="nice gallery image">
          </div>

          <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('img/img9.jpg') }}" class="rounded shadow img-fluid" alt="nice gallery image">
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="py-vh-6 bg-gray-900 text-light w-100 overflow-hidden" id="contact">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8" data-aos="fade">
        <p class="text-secondary lead">Ας ξεκινήσουμε ένα έργο μαζί!</p>
        <h2 class="display-6 mb-4">Επικοινωνήστε μαζί μας</h2>

        @if(session('contact_success'))
        <div class="alert alert-success mb-4" role="alert">
          {{ session('contact_success') }}
        </div>
        @endif
        @if(session('contact_error'))
        <div class="alert alert-danger mb-4" role="alert">
          {{ session('contact_error') }}
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger mb-4" role="alert">
          <ul class="mb-0 ps-3">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="text-start">
          @csrf
          <div class="mb-3">
            <label for="contact-name" class="form-label">Όνομα <span class="text-danger">*</span></label>
            <input type="text" name="name" id="contact-name" class="form-control form-control-lg bg-dark text-light border-secondary"
              value="{{ old('name') }}" required maxlength="255" placeholder="Το όνομά σας">
          </div>
          <div class="mb-3">
            <label for="contact-email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" id="contact-email" class="form-control form-control-lg bg-dark text-light border-secondary"
              value="{{ old('email') }}" required placeholder="example@email.com">
          </div>
          <div class="mb-3">
            <label for="contact-subject" class="form-label">Θέμα <span class="text-danger">*</span></label>
            <input type="text" name="subject" id="contact-subject" class="form-control form-control-lg bg-dark text-light border-secondary"
              value="{{ old('subject') }}" required maxlength="255" placeholder="Θέμα μηνύματος">
          </div>
          <div class="mb-4">
            <label for="contact-message" class="form-label">Μήνυμα <span class="text-danger">*</span></label>
            <textarea name="message" id="contact-message" class="form-control form-control-lg bg-dark text-light border-secondary" rows="5"
              required maxlength="10000" placeholder="Γράψτε το μήνυμά σας...">{{ old('message') }}</textarea>
          </div>
          <button type="submit" class="btn btn-warning btn-xl shadow">Αποστολή μηνύματος</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="bg-light w-100 overflow-hidden" id="reviews">
  <div class="container py-vh-6">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8 text-center">
        <h2 class="display-6">Τα δικά σας σχόλια</h2>
        <p class="lead">Μερικές από τις αξιολογήσεις μας στο Google</p>
      </div>
      <div class="col-12 mt-4">
        <div class="row row-cols-1 row-cols-md-2 g-5 d-flex align-items-center">

          <div class="col-12 col-lg-6 col-xl-4">
            <div class="card p-4 shadow mt-3 border-0" data-aos="fade-down">
              <div class="card-body">
                <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                </div>
                <blockquote class="blockquote">
                  <p>"Στο κατάστημα αυτό μπορείτε να βρείτε ότι πραγματικά χρειάζεστε !!Έχει άριστη εξυπηρέτηση σε έναν μοντέρνο και φιλικό περιβάλλον!!!"</p>
                </blockquote>
                <div class="d-flex justify-content-between border-top pt-3">
                  <p class="card-text">
                    <span class="h6 fw-5">Maria N.</span><br>
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="48" height="48" class="rounded-circle" viewBox="0 0 24 24" id="user-9" data-name="Line Color" class="icon line-color">
                    <path id="secondary" d="M7.46,13.26A5,5,0,0,0,4,18v1s2,2,8,2,8-2,8-2V18a5,5,0,0,0-3.51-4.75" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                    <circle id="primary" cx="12" cy="9" r="6" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
            <div class="card p-4 mt-3 border-0">
              <div class="card-body">
                <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-half" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                </div>
                <blockquote class="blockquote">
                  <p>"Εξαιρετική εμπειρία! Το κατάστημα διαθέτει μεγάλη γκάμα οικοδομικών υλικών σε πολύ καλές τιμές. Το προσωπικό ήταν ευγενικό, καταρτισμένο και μας βοήθησε να βρούμε ακριβώς αυτό που χρειαζόμασταν. Η εξυπηρέτηση ήταν άμεση και επαγγελματική. Σίγουρα θα το προτιμήσω ξανά και το προτείνω ανεπιφύλακτα!"</p>
                </blockquote>
                <div class="d-flex justify-content-between border-top pt-3">
                  <div>
                    <span class="h6 fw-5">Katholiki C.</span><br>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="48" height="48" viewBox="0 0 24 24" id="user-9" data-name="Line Color" class="icon line-color">
                    <path id="secondary" d="M7.46,13.26A5,5,0,0,0,4,18v1s2,2,8,2,8-2,8-2V18a5,5,0,0,0-3.51-4.75" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                    <circle id="primary" cx="12" cy="9" r="6" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 col-xl-4">
            <div class="card p-4 mt-3 border-0" data-aos="fade-left">
              <div class="card-body">
                <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                </div>
                <blockquote class="blockquote">
                  <p>"Έχει τα πάντα ότι ζητήσεις, ωραίο περιβάλλον και πολύ καλές τιμές!!!"</p>
                </blockquote>
                <div class="d-flex justify-content-between border-top pt-3">
                  <p class="card-text">
                    <span class="h6 fw-5">Katerina K.</span><br>
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="48" height="48" class="rounded-circle" viewBox="0 0 24 24" id="user-9" data-name="Line Color" class="icon line-color">
                    <path id="secondary" d="M7.46,13.26A5,5,0,0,0,4,18v1s2,2,8,2,8-2,8-2V18a5,5,0,0,0-3.51-4.75" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                    <circle id="primary" cx="12" cy="9" r="6" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
    <div class="row py-vh-3">
      <div class="col-12 text-center">
        <a href="https://g.page/r/CSZLuE_86BYMEBM/review" class="btn btn-primary" target="_blank">Βαθμολογήστε μας στο Google</a>
      </div>
    </div>
  </div>
</div>

<div class="small py-vh-3 w-100 overflow-hidden">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-3 border-end" data-aos="fade-up">
        <div class="d-flex">
          <div class="col-md-3 flex-fill pt-3 pe-3 pe-md-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="42" height="42" viewBox="0 0 24 24" id="quality-3" data-name="Line Color" class="icon line-color">
              <polyline id="secondary" points="11 8 12 7 12 13" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <line id="secondary-2" data-name="secondary" x1="11" y1="13" x2="13" y2="13" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <polyline id="primary" points="5.79 13.57 3 17.56 6.03 18.46 7.91 21 10.79 16.89" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <polyline id="primary-2" data-name="primary" points="18.21 13.57 21 17.56 17.97 18.46 16.09 21 13.21 16.89" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <circle id="primary-3" data-name="primary" cx="12" cy="10" r="7" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
            </svg>
          </div>
          <div class="col-md-9 flex-fill">
            <h3 class="h5 my-2">Ποιότητα Χωρίς Συμβιβασμούς</h3>
            <p>Συνεργαζόμαστε με αξιόπιστους προμηθευτές και επιλέγουμε προϊόντα που αντέχουν στον χρόνο και στη δουλειά..</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-3 border-end" data-aos="fade-up" data-aos-delay="200">
        <div class="d-flex">
          <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="42" height="42" viewBox="0 0 24 24" id="check-lists" data-name="Line Color" class="icon line-color">
              <polyline id="secondary" points="7 4 4.33 7 3 5.5" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <polyline id="secondary-2" data-name="secondary" points="3 11.5 4.33 13 7 10" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <polyline id="secondary-3" data-name="secondary" points="3 17.5 4.33 19 7 16" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <path id="primary" d="M11,6H21M11,12H21M11,18H21" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
            </svg>
          </div>
          <div class="col-md-9 flex-fill">
            <h3 class="h5 my-2">Εξειδίκευση & Τεχνογνωσία</h3>
            <p>Δεν είμαστε απλώς ένα κατάστημα. Σου προτείνουμε λύσεις. Ξέρουμε τι χρειάζεται κάθε έργο — από τα θεμέλια μέχρι το φινίρισμα.</p>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-3 border-end" data-aos="fade-up" data-aos-delay="400">
        <div class="d-flex">
          <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="42" height="42" viewBox="0 0 24 24" id="brainstorming" data-name="Line Color" class="icon line-color">
              <path id="secondary" d="M12,5.5A2.5,2.5,0,0,1,17,5.05,2.48,2.48,0,0,1,19,7.5a2.37,2.37,0,0,1-.25,1.07A3,3,0,0,1,20,11a3,3,0,0,1-.78,2A3,3,0,0,1,17,18H17a2.94,2.94,0,0,1,.05.51,2.5,2.5,0,0,1-5,0Z" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <path id="primary" d="M12,5.5a2.5,2.5,0,0,0-4.95-.45A2.48,2.48,0,0,0,5,7.5a2.37,2.37,0,0,0,.25,1.07A3,3,0,0,0,4,11a3,3,0,0,0,.78,2A3,3,0,0,0,7,18h0a2.94,2.94,0,0,0,0,.51,2.5,2.5,0,0,0,5,0Z" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
            </svg>
          </div>
          <div class="col-md-9 flex-fill">
            <h3 class="h5 my-2">Για Επαγγελματίες & Απαιτητικούς Ερασιτέχνες</h3>
            <p>Είτε είσαι μάστορας είτε DIY δημιουργός, εδώ θα βρεις τον εξοπλισμό που σου αξίζει.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <div class="d-flex">
          <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="42" height="42" viewBox="0 0 24 24" id="user-5" data-name="Line Color" class="icon line-color">
              <path id="secondary" d="M9,13a5,5,0,0,0-5,5H4v1s2,2,8,2,8-2,8-2V18h0a5,5,0,0,0-5-5Z" style="fill: none; stroke: rgb(255, 209, 17); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
              <circle id="primary" cx="12" cy="8" r="5" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
            </svg>
          </div>
          <div class="col-md-9 flex-fill">
            <h3 class="h5 my-2">Άμεση Εξυπηρέτηση</h3>
            <p>Γρήγορη διαθεσιμότητα, σωστή καθοδήγηση και ανθρώπινη εξυπηρέτηση.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection