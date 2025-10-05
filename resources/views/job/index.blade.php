<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <h1>hello from job</h1>
    <h2>my name is {{ $name }}</h2>
    @foreach ($jobs as $job )
    <h1>{{ $job["title"] }}: {{ $job["salary"] }}</h1>
    @endforeach
<script>
    console.log("hello from php working")
</script>
</div>
