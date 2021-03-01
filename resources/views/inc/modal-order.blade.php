<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <!-- -->
        <div class="login-form modal-purchase">
            <form action="{{route('modal_order_place')}}" method="POST">
            @csrf
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="close-modal">&times;</span>
              </button>
                  <h2 class="text-center">Оформление заказа</h2>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th scope="row"><a href="/"><img class="basketimg mr-1" src=""></a></th>
                        <td colspan="2"><span class="basket-prod-name"></span></td>
                        <td scope="cols">
                          <!-- <div class="nice-number"> -->
                            <input type="number" name="inputModal" min="1" max="10">
                          <!-- </div> -->

                                <!-- <input type="hidden" name="item_price"> -->
                                <!-- <input type="number" name="inputModal" min="1" max="100"></input> -->
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3"><h5>Общая стоимость:</h5></td>
                        <td class="d-flex"><h5 class="totalPrice"></h5><h5>AZN</h5></td>
                    </tr>
                    </tbody>
                  </table>
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    @enderror

                </div>
                 <div class="form-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong></strong>
                          </span>
                      @enderror

                 </div>
                 <div class="form-group">
                      <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="phone">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong></strong>
                          </span>
                      @enderror

                 </div>
                 <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block submitModal" value="Оформить заказ">
                 </div>
            </form>
        </div>
        <!-- -->
      </div>
    </div>
  </div>
</div>
