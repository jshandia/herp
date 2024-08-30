@php
    $settings = Utility::settings();
@endphp
<div class="pt-0 pb-3 modal-body pos-module" id="printarea" >
    <table class="table pos-module-tbl">
        <tbody>
            <div class="text-center ">
                <h3>{{$settings['company_name']}}</h3>
            </div>
            <br>

            <div class="text-left">
                <b>{{ $details['pos_id'] }}</b>
            </div>
            <div class="text-left">
                @if($settings['company_name']!=null)
                {{$settings['company_name']}}<br>
                @endif
                @if($settings['mail_from_address']!=null)
                {{$settings['mail_from_address'] }}<br>
                @endif
                @if($settings['company_address']!=null)
                {{$settings['company_address'] }}<br>
                @endif
                @if($settings['company_city']!=null)
                {{$settings['company_city']}},
                @endif
                @if($settings['company_state']!=null)
                {{$settings['company_state'] }},
                @endif
                @if($settings['company_zipcode']!=null)
                {{$settings['company_zipcode'] }}<br>
                @endif
                @if($settings['company_country']!=null)
                {{$settings['company_country'] }}<br>
                @endif
                @if($settings['company_telephone']!=null)
                {{$settings['company_telephone'] }}<br>
                @endif
            </div>
            <div class="invoice-to mt-2 product-border larger-text-print" >
                {!! isset($details['customer']['name']) ? '' : $details['customer']['details'] !!}
            </div>
            <div class="larger-text-print">
                {!! isset($details['customer']['name']) ? 'Name:  ' . $details['customer']['name'] : '' !!}
            </div>
            <div class="larger-text-print">
                {!! isset($details['customer']['address']) ? 'Address:  ' . $details['customer']['address'] : '' !!}
            </div>
            <div class="larger-text-print">
                {!! isset($details['customer']['email']) ? 'Email:  ' . $details['customer']['email'] : '' !!}
            </div>
            <div class="larger-text-print">
                {!! isset($details['customer']['phone_number']) ? 'Phone:  ' . $details['customer']['phone_number'] : '' !!}
            </div>
            <div class="larger-text-print">
                {!! isset($details['date']) ? 'Date of POS:  ' . $details['date'] : '' !!}
            </div>
            <div class="product-border larger-text-print">
                {!! isset($details['warehouse']['details']) ? 'Warehouse Name:  ' . $details['warehouse']['details'] : '' !!}
            </div>
        </tbody>
    </table>
    <div class=" text-black text-left fs-5 mt-0 mb-0">{{__('Items')}}</div>
        @foreach ($sales['data'] as $key => $value)
            <div class="mt-2">
                <div class="p-0"> <b>{{ $value['name'] }}</b></div>
                <div class="d-flex product-border">
                    <div class="larger-text-print">{{ __('Quantity:') }}</div>
                    <div class="text-end ms-auto larger-text-print">{{ $value['quantity'] }}</div>
                </div>
            </div>
            <div class="d-flex product-border">
                <div class="larger-text-print">{{__('Price:')}}</div>
                <div class="text-end ms-auto larger-text-print">{{ $value['price'] }}</div>
            </div>
            <div class="d-flex product-border">
                <div class="larger-text-print">{{__('Tax:')}}</div>
                <div class="text-end ms-auto larger-text-print"> {{ $value['tax'] }}</div>
            </div>
            <div class="d-flex product-border mb-2">
                <div class="larger-text-print">{{__('Tax Amount:')}}</div>
                <div class="text-end ms-auto larger-text-print">{{ $value['tax_amount'] }}</div>
            </div>
            <div class="d-flex product-border mb-2">
                <div class="larger-text-print">{{__('Sub Total:')}}</div>
                <div class="text-end ms-auto larger-text-print"> {{ $value['subtotal'] }}</div>
            </div>
        @endforeach
        <div class="d-flex product-border mb-2 mt-4">
            <div><b>{{__('Discount:')}}</b></div>
            <div class="text-end ms-auto larger-text-print"> {{ $sales['discount'] }}</div>
        </div>
        <div class="d-flex product-border mb-2">
            <div><b>{{__('Total:')}}</b></div>
            <div class="text-end ms-auto larger-text-print"> {{ $sales['total'] }}</div>
        </div>

        <h5 class="text-center mt-3 font-label">{{__('Thank You For Shopping With Us. Please visit again.')}}</h5>
</div>

    <div class="justify-content-center pt-2 modal-footer">
        <a href="#" id="print"
            class="btn btn-primary btn-sm text-right float-right mb-3 ">
            {{ __('Print') }}
        </a>
    </div>
<script>
    $("#print").click(function () {
        var print_div = document.getElementById("printarea");
        $('.row').addClass('d-none');
        $('.toast').addClass('d-none');
        $('#print').addClass('d-none');
        window.print();
        $('.row').removeClass('d-none');
        $('#print').removeClass('d-none');
        $('.toast').removeClass('d-none');
    });
</script>




