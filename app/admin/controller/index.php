<?php
declare (strict_types = 1);

namespace app\admin\controller;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

use think\Request;

class index
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        AlibabaCloud::accessKeyClient('LTAI4G5jcEvAAqTaprRBHaYq', 'cewRuOT3zOyA0OpH58fnniQaMI4pZy')
        ->regionId('cn-hangzhou')
        ->asDefaultClient();
    
        $tmpparam = [
            'name' => '周波',
            'time' => date("Y-m-d")
        ];
        try {
            $result = AlibabaCloud::rpc()
            ->product('Dysmsapi')
            // ->scheme('https') // https | http
            ->version('2017-05-25')
            ->action('SendSms')
            ->method('POST')
            ->host('dysmsapi.aliyuncs.com')
            ->options([
                'query' => [
                'RegionId' => "cn-hangzhou",
                'PhoneNumbers' => "13540025225",
                'SignName' => "贝臣口腔",
                'TemplateCode' => "SMS_197885900",
                'TemplateParam' => json_encode($tmpparam),
                ],
            ])
            ->request();
            print_r($result->toArray());
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
