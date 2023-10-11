@extends('../layoutCTSU/layout')
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Management</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchases as $purchase)
                    <tr>
                        <th scope="row">{{ $purchase->id }}</th>
                        <td>{{ $purchase->user->name }}</td>
                        <td>${{ $purchase->total_price }}</td>
                        <td>
                            <a href="#">
                                <i class="bi bi-pen-fill"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <form method="POST" action="{{ route('purchases.destroy', ['id' => $purchase->id]) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0 m-0" onclick="return confirm('Are you sure you want to delete this purchase?')">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </button>
                            </form>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ route('courses.show', ['id' => $purchase->course->id]) }}">
                                Course: <i class="bi bi-card-checklist text-primary"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="/purchasesur">
                                <i class="bi bi-card-checklist text-primary"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>