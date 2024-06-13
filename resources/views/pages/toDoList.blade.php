@extends("template") @section("title", "Ma Todo List") @section("content")
    <div class="container">
        <div class="card d-flex justify-content-center align-content-center">
            <div class="card-body">
                <!-- Action -->
                <form action="/dashboard/list" method="post" class="add">
                    @csrf
                    <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"
          ><span class="oi oi-pencil"></span
              ></span>
                        <input
                            id="texte"
                            name="texte"
                            type="text"
                            class="form-control"
                            placeholder="Prendre une note…"
                            aria-label="My new idea"
                            aria-describedby="basic-addon1"
                        />
                    </div>
                </form>

                <!-- Liste -->
                <ul class="list-group">
                    @forelse ($todos as $todo)
                        <li class="list-group-item">
                            <span>{{ $todo->text }}</span>
                            <!-- Action à ajouter pour Terminer et supprimer -->
                        </li>
                    @empty
                        <li class="list-group-item text-center">C'est vide !</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
