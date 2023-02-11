<div>
  <div class="input-group mb-3">
      <div>
          <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
          <input type="text" name="title" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default" required autocomplete="title" autofocus>
      </div>
      <div>
          <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
          <input type="file" class="form-control input-select" name="image" id="image" required
              autocomplete="image" autofocus>
      </div>
      <div>
          <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
          <input type="text" name="description" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default" required autocomplete="description" autofocus>
      </div>
  </div>
</div>
<div>
  <button type="submit" class="btn bt-create">Create</button>
  <button type="submit" class="btn bt-cancel ml-3" onclick="window.location='{{ route('home') }}';return false;">Cancel</button>
</div>