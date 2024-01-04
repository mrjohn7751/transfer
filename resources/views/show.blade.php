@extends('app')
@section('contend')

<div class="container text-center mt-5 col-10 col-md-4 table-show" data-new-gr-c-s-check-loaded="14.1115.0" data-gr-ext-installed="">
    <form class="form-signin">
        <img class="mb-4" src="https://yt3.googleusercontent.com/ytc/AL5GRJVa6oqLotNyTOXB7PEBsklq_cqZrB5rJN_ic12h=s900-c-k-c0x00ffffff-no-rj" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Talabalar turar joyi</h1>
        <label for="inputEmail" class="sr-only m-3">Login</label>
        <input type="email" id="log" class="form-control"  placeholder="Admin" required autofocus>
        <label for="inputPassword" class="sr-only mt-4 mb-3">Parol</label>
        <input type="password" id="passcode" class="form-control" placeholder="123456" required="">
        
        <button onclick="login()" class="btn btn-lg btn-primary btn-block mt-4 px-5" type="button">Kirish</button>
    </form>
    </div>


    <table class="table table-bordered table-style d-none" id="message">
        <thead>
          <tr>
            <th scope="col">№</th>
            <th scope="col">F.I.SH</th>
            <th scope="col">tel</th>
            <th scope="col">tel qo'shimcha</th>
            <th scope="col">Yonalish</th>
            <th scope="col">Talim shakli</th>
            <th scope="col">Gurux</th>
            <th scope="col">Kurs</th>
            <th scope="col">Ko'chirayotgan Yo'nalish</th>
            <th scope="col">K.Talim shakl</th>
            <th scope="col">Tiklash</th>
            <th scope="col">Fayl yuklash</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($ttjs as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->phone_num }}</td>
                <td>{{ $row->parent_num }}</td>
                <td>{{ $row->deriction }}</td>
                <td>{{ $row->shape }}</td>
                <td>{{ $row->group }}</td>
                <td>{{ $row->course }}</td>
                <td>{{ $row->deriction2 }}</td>
                <td>{{ $row->shape2 }}</td>
                <td>{{ $row->details }}</td>
                <td><a href="{{ route('ttj.download', ['id' => $row->id]) }}" >ads</a></td>
              </tr>
            @endforeach
            {{-- <div class="pagination">
                {{ $ttjs->links() }}
            </div> --}}
        </tbody>
    </table>
    <script>
            function login() {
                var passcode = "transfer@admin";
                var passcodeInput = document.getElementById("passcode").value;
		var messageElement = document.getElementById("message");
                var tableshowElement = document.querySelector(".table-show");

                if (passcodeInput === passcode) {
                    messageElement.classList.remove("d-none");
                    tableshowElement.classList.add("d-none");
                } else {
                    messageElement.innerHTML = "#"; // Set some error message inside the "message" element
                }
            }
        </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

@endsection