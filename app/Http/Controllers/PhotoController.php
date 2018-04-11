<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Repositories\PhotoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Photo;

class PhotoController extends AppBaseController
{
    /** @var  PhotoRepository */
    private $photoRepository;

    public function __construct(PhotoRepository $photoRepo)
    {
        $this->photoRepository = $photoRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Photo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $photos = Photo::all();
        return view('backend.photos.index',compact('photos'));
    }

    /**
     * Show the form for creating a new Photo.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.photos.create');
    }

    /**
     * Store a newly created Photo in storage.
     *
     * @param CreatePhotoRequest $request
     *
     * @return Response
     */
    public function store(CreatePhotoRequest $request)
    {
        $input = $request->all();

        $photo = $this->photoRepository->create($input);

        Flash::success('Photo saved successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified Photo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        return view('backend.photos.show')->with('photo', $photo);
    }

    /**
     * Show the form for editing the specified Photo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        return view('backend.photos.edit')->with('photo', $photo);
    }

    /**
     * Update the specified Photo in storage.
     *
     * @param  int              $id
     * @param UpdatePhotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhotoRequest $request)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        $photo = $this->photoRepository->update($request->all(), $id);

        Flash::success('Photo updated successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Remove the specified Photo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');
            return redirect(route('photos.index'));
        }
        $photo = Photo::where('id',$id)->first();
        $this->photoRepository->delete($id);
        unlink(public_path('img/'.$photo['path']));
        Flash::success('Photo deleted successfully.');

        return redirect(route('photos.index'));
    }

    public function upload(Request $request)
    {

        if($request->hasFile('file')){
            $time = Carbon::now()->format('Ymd-His');
            $file = $request->file('file');
            $extension = $file->extension();
            $filename = $time."_".$file->getClientOriginalName();
            $file->move(public_path().'\img', $filename);
                
            Photo::create([
                'path' => '/' . $filename,
                'alt' => 'shablon']);
            $photos = Photo::all();
            return view('backend.photos.index',compact('photos'));
        }
        


        // Creating the directory, for example, if the date = 18/10/2017, the directory will be 2017/10/
/*        $directory = date_format($time, 'Y') . '/' . date_format($time, 'm');
        // Creating the file name: random string followed by the day, random number and the hour
        $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time, 'h').".".$extension*/;

    }
}
