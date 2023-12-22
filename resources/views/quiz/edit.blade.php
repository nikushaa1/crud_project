<!-- resources/views/quiz/edit.blade.php -->

<form action="{{ route('quiz.update', ['id' => $quiz->id]) }}" method="post">
    @csrf
    <!-- Form fields pre-filled with $quiz data go here -->
    <button type="submit">Update Quiz</button>
</form>