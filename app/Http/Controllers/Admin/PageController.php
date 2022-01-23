<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Flasher\Laravel\Facade\Flasher;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->paginate(20);
        return view('admin.page.index', ['pages' => $pages]);
    }


    /**
     * Resource form validation
     */
    public function validatePage() {
        return [
            'name'    => 'required',
            'slug'    => 'required',
            'content' => 'required',
        ];
    }

    /**
     * Page saveOrUpdate function
     */
    public function saveOrUpdate($page, $request) {
        $page->name    = $request->name;
        $page->slug    = $request->slug;
        $page->content = $request->content;

        $page->save();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validatePage());

        $page = new Page();
        $this->saveOrUpdate($page, $request);

        Flasher::addSuccess('Page has been added.');
        return redirect(route('dashboard-page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.Page.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $request->validate($this->validatePage());

        $this->saveOrUpdate($page, $request);

        Flasher::addSuccess('Page has been updated.');
        return redirect(route('dashboard-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        Flasher::addSuccess('Page has been deleted.');

        return back();
    }
}
