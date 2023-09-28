<?php
// This file was auto-generated from sdk-root/src/data/bedrock-runtime/2023-09-30/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Describes the API operations for running inference using Bedrock models.</p>', 'operations' => [ 'InvokeModel' => '<p>Invokes the specified Bedrock model to run inference using the input provided in the request body. You use InvokeModel to run inference for text models, image models, and embedding models.</p> <p>For more information about invoking models, see Using the API in the <a href="https://d2eo22ngex1n9g.cloudfront.net/Documentation/BedrockUserGuide.pdf">Bedrock User Guide</a>.</p> <p>For example requests, see Examples (after the Errors section).</p>', 'InvokeModelWithResponseStream' => '<p>Invoke the specified Bedrock model to run inference using the input provided. Return the response in a stream.</p> <p>For more information about invoking models, see Using the API in the <a href="https://d2eo22ngex1n9g.cloudfront.net/Documentation/BedrockUserGuide.pdf">Bedrock User Guide</a>.</p> <p>For an example request and response, see Examples (after the Errors section).</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>The request is denied because of missing access permissions.</p>', 'refs' => [], ], 'Body' => [ 'base' => NULL, 'refs' => [ 'InvokeModelRequest$body' => '<p>Input data in the format specified in the content-type request header. To see the format and content of this field for different models, refer to <a href="https://docs.aws.amazon.com/bedrock/latest/userguide/model-parameters.html">Inference parameters</a>.</p>', 'InvokeModelResponse$body' => '<p>Inference response from the model in the format specified in the content-type header field. To see the format and content of this field for different models, refer to <a href="https://docs.aws.amazon.com/bedrock/latest/userguide/model-parameters.html">Inference parameters</a>.</p>', 'InvokeModelWithResponseStreamRequest$body' => '<p>Inference input in the format specified by the content-type. To see the format and content of this field for different models, refer to <a href="https://docs.aws.amazon.com/bedrock/latest/userguide/model-parameters.html">Inference parameters</a>.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>An internal server error occurred. Retry your request.</p>', 'refs' => [ 'ResponseStream$internalServerException' => NULL, ], ], 'InvokeModelIdentifier' => [ 'base' => NULL, 'refs' => [ 'InvokeModelRequest$modelId' => '<p>Identifier of the model. </p>', 'InvokeModelWithResponseStreamRequest$modelId' => '<p>Id of the model to invoke using the streaming request.</p>', ], ], 'InvokeModelRequest' => [ 'base' => NULL, 'refs' => [], ], 'InvokeModelResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvokeModelWithResponseStreamRequest' => [ 'base' => NULL, 'refs' => [], ], 'InvokeModelWithResponseStreamResponse' => [ 'base' => NULL, 'refs' => [], ], 'MimeType' => [ 'base' => NULL, 'refs' => [ 'InvokeModelRequest$accept' => '<p>The desired MIME type of the inference body in the response. The default value is <code>application/json</code>.</p>', 'InvokeModelRequest$contentType' => '<p>The MIME type of the input data in the request. The default value is <code>application/json</code>.</p>', 'InvokeModelResponse$contentType' => '<p>The MIME type of the inference result.</p>', 'InvokeModelWithResponseStreamRequest$accept' => '<p>The desired MIME type of the inference body in the response. The default value is <code>application/json</code>.</p>', 'InvokeModelWithResponseStreamRequest$contentType' => '<p>The MIME type of the input data in the request. The default value is <code>application/json</code>.</p>', 'InvokeModelWithResponseStreamResponse$contentType' => '<p>The MIME type of the inference result.</p>', ], ], 'ModelErrorException' => [ 'base' => '<p>The request failed due to an error while processing the model.</p>', 'refs' => [], ], 'ModelNotReadyException' => [ 'base' => '<p>The model specified in the request is not ready to serve inference requests.</p>', 'refs' => [], ], 'ModelStreamErrorException' => [ 'base' => '<p>An error occurred while streaming the response.</p>', 'refs' => [ 'ResponseStream$modelStreamErrorException' => NULL, ], ], 'ModelTimeoutException' => [ 'base' => '<p>The request took too long to process. Processing time exceeded the model timeout length.</p>', 'refs' => [], ], 'NonBlankString' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'InternalServerException$message' => NULL, 'ModelErrorException$message' => NULL, 'ModelErrorException$resourceName' => '<p>The resource name.</p>', 'ModelNotReadyException$message' => NULL, 'ModelStreamErrorException$message' => NULL, 'ModelStreamErrorException$originalMessage' => '<p>The original message.</p>', 'ModelTimeoutException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ThrottlingException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'PartBody' => [ 'base' => NULL, 'refs' => [ 'PayloadPart$bytes' => '<p>Base64-encoded bytes of payload data.</p>', ], ], 'PayloadPart' => [ 'base' => '<p>Payload content included in the response.</p>', 'refs' => [ 'ResponseStream$chunk' => '<p>Content included in the response.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource ARN was not found. Check the ARN and try your request again.</p>', 'refs' => [], ], 'ResponseStream' => [ 'base' => '<p>Definition of content in the response stream.</p>', 'refs' => [ 'InvokeModelWithResponseStreamResponse$body' => '<p>Inference response from the model in the format specified by Content-Type. To see the format and content of this field for different models, refer to <a href="https://docs.aws.amazon.com/bedrock/latest/userguide/model-parameters.html">Inference parameters</a>.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The number of requests exceeds the service quota. Resubmit your request later.</p>', 'refs' => [], ], 'StatusCode' => [ 'base' => NULL, 'refs' => [ 'ModelErrorException$originalStatusCode' => '<p>The original status code.</p>', 'ModelStreamErrorException$originalStatusCode' => '<p>The original status code.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The number of requests exceeds the limit. Resubmit your request later.</p>', 'refs' => [ 'ResponseStream$throttlingException' => NULL, ], ], 'ValidationException' => [ 'base' => '<p>Input validation failed. Check your request parameters and retry the request.</p>', 'refs' => [ 'ResponseStream$validationException' => NULL, ], ], ],];
