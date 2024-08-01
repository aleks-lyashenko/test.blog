@extends('admin.layouts.layout')

@section('main')
<main class="container" id="content">
  <section class="header">
    <h1>Категории</h1>
    @if($success)
      <div class="alert alert-success">{{$success}}</div>
    @endif
    @if($failure)
      <div class="alert alert-danger">{{$failure}}</div>
    @endif
    <p><a href="category.php" class="btn btn-primary">Добавить новую категорию</a></p>
  </section>

  <table class="categories">
    <tr>
      <th>Наименование</th>
      <th class="edit">Изменить</th>
      <th class="del">Удалить</th>
    </tr>
    @foreach ($categories as $category)
      <tr>
        <td><strong>{{($category['title'])}}</strong></td>
        <td><a href="category.php?id={{$category['id']}}"
               class="btn btn-primary">Изменить</a></td>
        <td><a href="category-delete.php?id={{$category['id']}}"
               class="btn btn-danger">Удалить</a></td>
      </tr>
    @endforeach
  </table>
</main>
@endsection


