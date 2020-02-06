@extends('template')

@section('body')
    <div class="container"
            id="mainContainer"
    >
        <div class="row">

                Current Caffeine Intake: <input id="curCaff"/>
                <BR/>
                Max Caffeine Intake: <input id="maxCaff"/>
        </div>
        <div class="row" id="drinkHolder">

            </div>
            </div>

    </div>
    <script type="text/javascript">
      $(document).ready(function () {
        loadDefaultValues()
      })


    </script>
@endsection
