<style>
    table {
        background: #fff;
        width: 100%;
        border: 0;
    }
    th {}
    td {
        border-top: 1px solid #999;
        padding: 5px;
    }
    tr:nth-child(odd) {
        background: #ddd;
    }
</style>
<table>
    <thead>
        <th>#</th>
        <th>Question</th>
        <th>Answers</th>
        <th>Created at</th>
        <th>Updated at</th>
    </thead>
    <tbody>
        @php
        $fmt_lamaw_ques = DB::table('fmt_lamaw_ques')->get();
        @endphp
        @foreach ($fmt_lamaw_ques as $que)
        <tr>
            <td>{{$que->id}}</td>
            <td>
                @php $que_media = DB::table('media')->where('id', $que->media_id)->first() @endphp
                <audio controls="controls" src="{{url('/')}}/storage/{{$que_media->url}}"></audio>
                {{-- <li><audio src="{{url('/')}}/storage/{{$que_media->url}}" ></li> --}}
            </td>
            <td>
                @php $fmt_lamaw_ans = DB::table('fmt_lamaw_ans')->where('question_id', $que->id)->orderby('arrange','asc')->get() @endphp
                <ul>
                    @foreach ($fmt_lamaw_ans as $ans)
                    <li>{{$ans->answer}}</li>
                    @endforeach
                </ul>
                <div><b>Answer: </b>
                    @foreach ($fmt_lamaw_ans as $ans)@if($ans->arrange!==0){{$ans->answer}}@endif
                    @endforeach</div>
            </td>
            <td>{{date('F d, Y',strtotime($que->created_at))}}</td>
            <td>{{date('F d, Y',strtotime($que->updated_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
