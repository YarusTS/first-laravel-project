<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        Название
        <input type="text" name="name" placeholder="название поста">
    </label>
    <label>
        Постер
        <input type="file" name="poster" id="poster">
    </label>

    <button type="submit">
        <span>Сохранить</span>
    </button>
</form>
