@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h2>All Questions</h2>
                      <div class="ml-auto">
                        <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">
                          Ask question
                        </a>
                      </div>
                  </div>
                </div>

                <div class="card-body">
                  @include ('layouts._messages')
                    @forelse ($questions as $question)
                        @include ('questions._excerpt')
                    @empty
                        <div class_="aleart" alert-warning>
                          <strong>Sorry </strong>There are you no question available;
                        </div>
                    @endforelse

                      {{ $questions->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
