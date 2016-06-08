/**
 * Created by jing on 2015/3/12.
 */
// laravel框架的csrf保护
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});