@extends('template')

@section('body')
    <div class="container"
            id="mainContainer"
    >
        <div class="row">
            <div class="col-md-6">
                <b>Current Caffeine Intake:</b> <span id="curCaff"></span> mg
                <BR/>
                <b>Max Safe Caffeine Intake:</b> <span id="maxCaff"></span> mg
            </div>
            <div class="col-md-6"
                    id="log"
            >
                <div style="text-align:left;font-weight:bold"> Drink Log</div>
            </div>
        </div>
        <hr/>
        <div class="row"
                id="drinkHolder"
        >

        </div>

    </div>
    <script type="text/javascript">
      $(document).ready(function () {
        loadDefaultValues()
      })


    </script>
@endsection
