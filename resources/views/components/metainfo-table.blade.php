<div class="table-responsive">
    <table class="table table-striped table-hover custom-table hidden-element">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome tag</th>
                <th scope="col">Articoli collegati</th>
                <th scope="col">Aggiorna</th>
                <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metaInfos as $metaInfo)
            <tr>
                <td data-label="#"> {{$metaInfo->id}}</td>
                <td data-label="Nome tag">{{$metaInfo->name}}</td>
                <td data-label="Articoli collegati">{{count($metaInfo->articles)}}</td>
                @if ($metaType == 'tags')
                <td data-label="Aggiorna">
                    <div class="btn-group">
                        <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST" style="margin: 0;">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{$metaInfo->name}}" name="name" placeholder="Nuovo nome tag" class="form-control d-inline" style="width: auto; margin-right: 5px;">
                            <button type="submit" class="btn btn-secondary btn-sm">Aggiorna</button>
                        </form>
                    </div>
                </td>
                <td data-label="Cancella">
                    <div class="btn-group">
                        <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                        </form>
                    </div>
                </td>
                @else
                <td data-label="Aggiorna">
                    <div class="btn-group">
                        <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST" style="margin: 0;">
                            @csrf
                            @method('PUT')
                            <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control d-inline" style="width: auto; margin-right: 5px;">
                            <button type="submit" class="btn btn-secondary btn-sm">Aggiorna</button>
                        </form>
                    </div>
                </td>
                <td data-label="Cancella">
                    <div class="btn-group">
                        <form action="{{ route('admin.deleteCategory', ['category' => $metaInfo]) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                        </form>
                        
                        
                    </div>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
