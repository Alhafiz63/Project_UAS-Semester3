<form method="POST" action="{{ route('documents.upload.process') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="student_id" value="{{ $student_id }}">
    <select name="document_type" required>
        <option value="birth_certificate">Birth Certificate</option>
        <option value="report_card">Report Card</option>
        <option value="photo">Photo</option>
        <option value="other">Other</option>
    </select>
    <input type="file" name="file_path" required>
    <button type="submit">Upload</button>
</form>
