<?php


use Illuminate\Support\Facades\Storage;

if (! function_exists('customer_file_upload')) {
    function customer_file_upload(\Illuminate\Http\Request $request)
    {
        $rtn = [];
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $timeStamp = now()->timestamp;
                $location = Storage::disk('s3')->putFileAs(
                    'uploads',
                    $request->file('file'),
                    $timeStamp.'-'.str_replace(
                        ' ',
                        '-',
                        $request->file('file')->getClientOriginalName()
                    ),
                    ['visibility' => 'public', 'Tagging' => 'uploads=temp']
                );
                $fileUrl = config('filesystems.disks.s3.url').$location;
                $info = [
                    'file_name' => $request->file('file')->getClientOriginalName(),
                    'file_size' => $request->file('file')->getSize(),
                    'url'       => $fileUrl,
                ];
                $rtn[] = $info;
            }
        }

        return $rtn;
    }
}
