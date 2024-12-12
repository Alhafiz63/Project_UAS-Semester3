<form method="POST" action="{{ route('payment.process') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="student_id" value="{{ $student_id }}">
    <input type="number" name="amount" placeholder="Amount" required>
    <input type="file" name="receipt_path">
    <button type="submit">Submit Payment</button>
</form>
