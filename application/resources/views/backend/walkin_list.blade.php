@extends('backend.partials')
@section('content')
    <div id="register">
        <div class="row">
            <h1>Walk-in Round {{ $id }}</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <input class="search form-control" placeholder="Search" />
                    <div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table table-hover table-responsive">
                <thead>
                    <th class="sort" data-sort="id">ID <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="prefix">Prefix <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="firstname">Firstname <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="lastnname">Lastname <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="nickname">Nickname <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="tel">Tel. <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="saturday">Saturday <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th class="sort" data-sort="sunday">Sunday <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th style="width: 238px;">Action</th>
                </thead>
                <tbody class="list">
                @foreach($registers as $register)
                    <tr>
                        <td class="id">{{ $register['id']  }}</td>
                        <td class="prefix">{{ $register['prefix'] }}</td>
                        <td class="firstname">{{ $register['firstname'] }}</td>
                        <td class="lastnname">{{ $register['lastname'] }}</td>
                        <td class="nickname">{{ $register['nickname'] }}</td>
                        <td class="tel">{{ $register['tel'] }}</td>
                        <td class="saturday">
                            @if($register['saturday'] != null)
                                <i class="fa fa-circle text-success"></i> Checked
                            @else
                                <i class="fa fa-circle text-muted"></i> Absent
                            @endif
                        </td>
                        <td class="sunday">
                            @if($register['sunday'] != null)
                                <i class="fa fa-circle text-success"></i> Checked
                            @else
                                <i class="fa fa-circle text-muted"></i> Absent
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="col" id="check-button">
                                    <form action="{{url('/backend/check/saturday/'. $register['id'])}}" method="post">
                                        {!! csrf_field() !!}
                                        @if($register['saturday'] == null)
                                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Saturday"><i class="fa fa-sign-in"></i> Saturday</button>
                                        @else
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Saturday"><i class="fa fa-times"></i> Saturday</button>
                                        @endif
                                    </form>
                                </div>
                                <div class="col" id="check-button">
                                    <form action="{{url('/backend/check/sunday/'. $register['id'])}}" method="post">
                                        {!! csrf_field() !!}
                                        @if($register['sunday'] == null)
                                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Sunday"><i class="fa fa-sign-in"></i> Sunday</button>
                                        @else
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Sunday"><i class="fa fa-times"></i> Sunday</button>
                                        @endif
                                    </form>
                                </div>
                                <div class="col" id="check-button">
                                    <a class="btn btn-info btn-sm" href="{{ URL('/backend/profile', $register['id']) }}" title="Sunday"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <ul class="pagination"></ul>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var options = {
            valueNames: [ 'id', 'prefix', 'firstname', 'lastname', 'nickname', 'tel', 'saturday', 'sunday' ],
            page: 10,
            pagination: {
                paginationClass: "pagination",
                innerWindow: 5,
                outerWindow: 2
            }
        };
        var registerList = new List('register', options);

        $("th.sort").click(function () {
            var thClass = $(this).attr('class').split(" ");
            if (thClass[1] == "asc") {
                $(this).find(':first-child').removeClass("fa-sort").removeClass('fa-sort-desc').addClass("fa-sort-asc");
            } else {
                $(this).find(':first-child').removeClass("fa-sort").removeClass('fa-sort-asc').addClass("fa-sort-desc");
            }
        });
    </script>
@endsection