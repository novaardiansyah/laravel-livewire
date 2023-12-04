<div class="card mb-3" aria-hidden="true">
  <div class="card-body">
    <table class="table">
      <thead>
        <tr class="placeholder-glow">
          <th scope="col">
            <span class="placeholder placeholder-lg col-12"></span>
          </th>
          <th scope="col">
            <span class="placeholder placeholder-lg col-12"></span>
          </th>
          <th scope="col">
            <span class="placeholder placeholder-lg col-12"></span>
          </th>
          <th scope="col">
            <span class="placeholder placeholder-lg col-12"></span>
          </th>
        </tr>
      </thead>

      <tbody>
        @for ($i = 1; $i <= $paginate; $i++)
          <tr class="placeholder-glow">
            <td scope="col">
              <span class="placeholder col-12"></span>
            </td>
            <td scope="col">
              <span class="placeholder col-12"></span>
            </td>
            <td scope="col">
              <span class="placeholder col-12"></span>
            </td>
            <td scope="col">
              <span class="placeholder col-12"></span>
            </td>
          </tr>
        @endfor
      </tbody>

    </table>
  </div>
</div>
