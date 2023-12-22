<!-- resources/views/quiz/create.blade.php -->

<form action="{{ route('quiz.store') }}" method="post">
    @csrf
    <!-- Form fields go here -->
    <button type="submit">Create Quiz</button>
</form>