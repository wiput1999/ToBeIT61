<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table>
    <thead>
    <tr>
        <th>ชื่อ - นามสกุล</th>
        <th>ชื่อเล่น</th>
        <th>ระดับชั้น</th>
        <th>โรงเรียน</th>
        <th>ศาสนา</th>
        <th>อีเมล</th>
        <th>เบอร์โทรศัพท์</th>
        <th>โรคประจำตัว</th>
        <th>อาหารที่แพ้</th>
        <th>Line ID</th>
        <th>Facebook</th>
        <th>จุดนัดพบ</th>
        <th>เบอร์โทรผู้ปกครอง</th>
        <th>รอบ</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
        <tr>
            <td>{{$data->prefix}} {{ $data->firstname }} {{ $data->lastname }}</td>
            <td>{{$data->nickname}}</td>
            <td>{{$data->degree}}</td>
            <td>{{$data->school}}</td>
            <td>{{$data->religion}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->tel}}</td>
            <td>{{$data->disease}}</td>
            <td>{{$data->food}}</td>
            <td>{{$data->line}}</td>
            <td>{{$data->facebook}}</td>
            <td>
                @if($data->appointment == 1)
                    Airport Rail Link ลาดกระบัง
                @endif
                @if($data->appointment == 2)
                    สนามบินสุวรรณภูมิ
                @endif
                @if($data->appointment == 3)
                    สถานีรถไฟหัวตะเข้
                @endif
                @if($data->appointment == 3)
                    หน้าคณะ IT
                @endif
                @if($data->appointment == 3)
                    วินรถตู้
                @endif
            </td>
            <td>{{$data->parent}}</td>
            <td>{{$data->round}}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3"><strong>Total:</strong> {{$datas->count()}}</td>
    </tr>
    </tfoot>
</table>
</body>
</html>