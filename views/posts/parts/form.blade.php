    <div>
    <input class="" name="title" type="text" required value="{{ old('title') ?? $post->title ?? '' }}">
    </div>
    <div>
        <textarea class="" name="descr" rows="3" required>{{ old('descr') ?? $post->descr  ?? '' }} </textarea>
    </div>
    <div>
    <input class="" name="img" type="file">
    </div>