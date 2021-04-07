    <div class="container">
        <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
          <div class="toast fixed-top hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
            <div class="toast-header bg-success">
              <span class="mr-auto notif_text"></span>
              <buatton type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
    <div class="col-lg-12">
    @if(Session::has('inc-product'))
      <p class="alert alert-success text-center mt-2  mb-1">
        Вы увеличили количество товара <strong> {{ Session::get('inc-product') }} </strong> на 1
      </p>
    @endif
    </div>
    <div class="col-lg-12">
    @if(Session::has('red-product'))
      <p class="alert alert-danger text-center mt-2  mb-1">
        Вы уменьшили количество товара <strong> {{ Session::get('red-product') }} </strong> на 1
      </p>
    @endif
    </div>
    <div class="col-lg-12">
    @if(Session::has('del-product'))
    <p class="alert alert-danger text-center mt-2  mb-1">
      Товара <strong> {{ Session::get('del-product') }} </strong> полностью удален из корзины
    </p>
    @endif
    </div>
    <div class="col-lg-12">
    @if(Session::has('success'))
    <p class="alert alert-success text-center mb-3">
      <strong> {{ Session::get('success') }} </strong>
    </p>
    @endif
    </div>
    <div class="col-lg-12">
    @if(Session::has('warning'))
    <p class="alert alert-warning text-center mt-2  mb-1">
      <strong> {{ Session::get('warning') }} </strong>
    </p>
    @endif
    </div>
    <div class="col-lg-12">
    @if(Session::has('danger'))
    <p class="alert alert-danger text-center mt-2  mb-1">
      <strong> {{ Session::get('danger') }} </strong>
    </p>
    @endif
    </div>
  </div>
