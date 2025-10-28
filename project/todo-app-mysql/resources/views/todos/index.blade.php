@extends('layouts.app')

@section('title', 'Daftar Todo')

@section('content')
    <h2>Daftar Todo</h2>

    <ul class="list-group">
        @foreach($todos as $todo)
            {{-- Menggunakan ID untuk memudahkan targeting oleh JavaScript --}}
            <li class="list-group-item d-flex justify-content-between align-items-center" id="todo-{{ $todo->id }}">

                {{-- Kiri: Status dan Task --}}
                <div class="d-flex align-items-center">
                    {{-- 1. Checkbox Status --}}
                    <input
                        type="checkbox"
                        class="form-check-input me-3 task-status-toggle"
                        data-todo-id="{{ $todo->id }}"
                        {{ $todo->completed ? 'checked' : '' }}
                    >

                    {{-- Judul Task dengan gaya coret jika sudah selesai --}}
                    <span style="{{ $todo->completed ? 'text-decoration: line-through;' : '' }}">
                        {{ $todo->task }}
                    </span>
                </div>

                {{-- Kanan: Tombol Aksi --}}
                <div>
                    <form action="{{ route('todos.show', $todo->id) }}" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-info btn-sm">Detail</button>
                    </form>
                    <form action="{{ route('todos.edit', $todo->id) }}" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                    </form>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    {{-- 4. Skrip AJAX untuk Menangani Status Toggle --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event listener saat checkbox diubah
            $('.task-status-toggle').on('change', function() {
                var todoId = $(this).data('todo-id');
                var isChecked = $(this).prop('checked');
                var $taskText = $(this).closest('.d-flex').find('span'); // Menemukan teks task

                // Tentukan URL route toggle (Ganti dengan nama route Anda yang sebenarnya jika berbeda)
                var url = '{{ url("/todos") }}/' + todoId + '/toggle';

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        completed: isChecked
                    },
                    success: function(response) {
                        // Jika berhasil, tambahkan atau hapus efek coret pada teks
                        if (response.completed) {
                            $taskText.css('text-decoration', 'line-through');
                        } else {
                            $taskText.css('text-decoration', 'none');
                        }
                    },
                    error: function(xhr) {
                        alert('Gagal memperbarui status. Silakan coba lagi.');
                        // Kembalikan status checkbox ke keadaan semula jika AJAX gagal
                        $(this).prop('checked', !isChecked);
                    }
                });
            });
        });
    </script>
@endsection
