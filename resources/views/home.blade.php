
<div>
    <text>
        Hello Student here are your subjects
    </text>
</div>


<center>
    <div>
        @foreach($all as $student)
            <ul>
                Subject {{$student->subject_id}} : {{$student->name}}
            </ul>


        @endforeach
    </div>

</center>
