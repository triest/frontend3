@extends('layouts.blog3', ['title' => 'Ввод телефона:'])

@section('content')



    <form action="{{route('inputMobilePhone2')}}" method="post" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}

        <div class="control-group2" ng-class="{true: 'error'}[submitted && form.pas.$invalid]">
            <div class="form-group">
                <label for="exampleInputFile">Введите телофон в формате 79211234567:</label>

                <!--   <input type="tel" class="form-control" id="phone" name="phone" pattern="^\(\d{3}\)\d{3}-\d{2}-\d{2}$" required></input>-->
                <input type="tel" class="form-control" id="phone" name="phone" required></input>

                @foreach($errors->all() as $error)
                    <li><b>{{$error}}</b></li>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-default">Введите телефон</button>
    </form>

    </b>
    <script type="text/javascript">
        function phonenumber(inputtxt)
        {
            var phoneno = /^\d{10}$/;
            if(inputtxt.value.match(phoneno))
            {
                return true;
            }
            else
            {
                alert("Неверный  мобильный номер");
                return false;
            }
        }
    </script>
    <br><br>
    <form action="{{route('inputActiveCode')}}" method="post"  novalidate>
        {{ csrf_field() }}
        <input type="text" class="form-control" id="code" name="code" required></input>
        <br>
        <button type="submit" class="btn btn-default">Введите код автивации</button>
    </form>
@endsection