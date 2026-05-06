@csrf

<label for="nome">Nome do produto</label>
<input
    type="text"
    id="nome"
    name="nome"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('nome', $curso->nome ?? '') }}"
    required
>

<label for="semestres">Semestre do curso</label>
<input
    type="integer"
    id="semestres"
    name="semestres"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('semestres', $curso->semestres ?? '') }}"
    required
>


<label for="descricao">Descricao</label>
<textarea
    id="descricao"
    name="descricao"
    rows="5"
    required
>{{ old('descricao', $curso->descricao ?? '') }}</textarea>

<button type="submit" class="btn">{{ $buttonText ?? 'Salvar' }}</button>
<a href="{{ route('cursos.index') }}" style="margin-left: 8px;">Cancelar</a>