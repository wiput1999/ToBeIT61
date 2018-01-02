@extends('backend.partials')
@section('content')
    <div id="register">
        <div class="row">
            <h1>Visitors</h1>
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
                    <th class="sort" data-sort="tel">Tel. <i class="fa fa-sort" aria-hidden="true"></i></th>
                    <th style="width: 238px;">Action</th>
                </thead>
                <tbody class="list">
                @foreach($registers as $register)
                    <tr>
                        <td class="id">{{ $register['id']  }}</td>
                        <td class="prefix">{{ $register['prefix'] }}</td>
                        <td class="firstname">{{ $register['firstname'] }}</td>
                        <td class="lastnname">{{ $register['lastname'] }}</td>
                        <td class="tel">{{ $register['tel'] }}</td>
                        <td>
                            <div class="row">
                                <form action="{{ url('/backend/visitor/delete/'. $register['id'])  }}" method="post">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-danger btn-md" title="Delete"><i class="fa fa-times"></i> Delete</button>
                                </form>
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