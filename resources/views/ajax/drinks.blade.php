@foreach($drinks as $drink)
    <div class="col-md-4"
            style="padding: 50px;"
    >
        <form id="Drink_{{ $drink->id }}"
                onsubmit="return false"
        >

            <img class="pull-left"
                    src="{{ $drink->image }}"
                    style="max-width: 300px; max-height: 100px"
            />
            <b><span id="drink_name_{{$drink->id}}">{{$drink->name}}</span></b><BR/>
            {{$drink->descr}}
            <BR/><b>Caffeine: </b>{{$drink->caff}} mg
            <BR/><b>Safe Drinks Left: </b> <span id="numDrinks_{{$drink->id}}"></span>
            <BR/><BR/>
            <a id="injestButton_{{ $drink->id }}"
                    data-id="{{$drink->id}}"
                    data-caff="{{ $drink->caff }}"
                    class="injestButton btn btn-primary"
            > - Injest - </a>
        </form>
    </div>
@endforeach

