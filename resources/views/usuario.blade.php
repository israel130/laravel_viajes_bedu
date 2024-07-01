@extends('adminlte::page')
@section('title', 'Boletos')
@section('content_header')
    <input type="hidden" id="compra" value="{{ $viaje }}">
    <input type="hidden" id="idusu" value="{{auth()->user()->id}}">
    <h1>Tus boletos @if ($viaje) {{ $viaje }} @endif.</h1>
@stop

@section('content')

    <div class="col-12">
        <div class="row" id="viajes_comprados">
        </div>
    </div>

    <div class="col-12" id="div_informacion">
        <div class="invoice p-3">
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> Viajes
                        <small class="float-right">Date: 2/10/2014</small>
                    </h4>
                </div>
        
            </div>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Admin, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (804) 123-5432<br>
                        Email: info@almasaeedstudio.com
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong>John Doe</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (555) 539-1037<br>
                        Email: john.doe@example.com
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Payment Due:</b> 2/22/2014<br>
                    <b>Account:</b> 968-34567
                </div>
            </div>
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>viaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{ $viaje }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        
            </div>
        
            <div class="row">
        
                <div class="col-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="/img/visa.png" alt="Visa">
                    <img src="/img/mastercard.png" alt="Mastercard">
                    <img src="/img/american-express.png" alt="American Express">
                    <img src="/img/paypal2.png" alt="Paypal">
                </div>
        
                <div class="col-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$250.30</td>
                                </tr>
                                <tr>
                                    <th>Tax (9.3%)</th>
                                    <td>$10.34</td>
                                </tr>
                                <tr>
                                    <th>Shipping:</th>
                                    <td>$5.80</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>$265.24</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        
            </div>
        
        
            <div class="row no-print">
                <div class="col-12">
                    <button type="button" class="btn btn-success float-right" onclick="comprar()">
                        <i class="far fa-credit-card"></i> 
                        comprar
                    </button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop
@section('js')
    <script type="text/javascript" src="/js/boletos.js" defer async></script>
@stop