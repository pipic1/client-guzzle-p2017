# client-guzzle

### Start guzzle

Simply run this command:

		$ php src/index.php

### Some Detail:

.
├── composer.json
├── composer.lock
├── composer.phar
├── README.md
├── src
│   └── index.php
└── vendor
    ├── autoload.php
		    ├── composer
				    │   ├── autoload_classmap.php
						    │   ├── autoload_files.php
								    │   ├── autoload_namespaces.php
										    │   ├── autoload_psr4.php
												    │   ├── autoload_real.php
														    │   ├── autoload_static.php
																    │   ├── ClassLoader.php
																		    │   ├── installed.json
																				    │   └── LICENSE
																						    ├── guzzlehttp
																								    │   ├── guzzle
																										    │   │   ├── build
																												    │   │   ├── CHANGELOG.md
																														    │   │   ├── composer.json
																																    │   │   ├── docs
																																		    │   │   ├── LICENSE
																																				    │   │   ├── README.md
																																						    │   │   ├── src
																																								    │   │   │   ├── ClientInterface.php
																																										    │   │   │   ├── Client.php
																																												    │   │   │   ├── Cookie
																																														    │   │   │   │   ├── CookieJarInterface.php
																																																    │   │   │   │   ├── CookieJar.php
																																																		    │   │   │   │   ├── FileCookieJar.php
																																																				    │   │   │   │   ├── SessionCookieJar.php
																																																						    │   │   │   │   └── SetCookie.php
																																																								    │   │   │   ├── Exception
																																																										    │   │   │   │   ├── BadResponseException.php
																																																												    │   │   │   │   ├── ClientException.php
																																																														    │   │   │   │   ├── ConnectException.php
																																																																    │   │   │   │   ├── GuzzleException.php
																																																																		    │   │   │   │   ├── RequestException.php
																																																																				    │   │   │   │   ├── SeekException.php
																																																																						    │   │   │   │   ├── ServerException.php
																																																																								    │   │   │   │   ├── TooManyRedirectsException.php
																																																																										    │   │   │   │   └── TransferException.php
																																																																												    │   │   │   ├── functions_include.php
																																																																														    │   │   │   ├── functions.php
																																																																																    │   │   │   ├── Handler
																																																																																		    │   │   │   │   ├── CurlFactoryInterface.php
																																																																																				    │   │   │   │   ├── CurlFactory.php
																																																																																						    │   │   │   │   ├── CurlHandler.php
																																																																																								    │   │   │   │   ├── CurlMultiHandler.php
																																																																																										    │   │   │   │   ├── EasyHandle.php
																																																																																												    │   │   │   │   ├── MockHandler.php
																																																																																														    │   │   │   │   ├── Proxy.php
																																																																																																    │   │   │   │   └── StreamHandler.php
																																																																																																		    │   │   │   ├── HandlerStack.php
																																																																																																				    │   │   │   ├── MessageFormatter.php
																																																																																																						    │   │   │   ├── Middleware.php
																																																																																																								    │   │   │   ├── Pool.php
																																																																																																										    │   │   │   ├── PrepareBodyMiddleware.php
																																																																																																												    │   │   │   ├── RedirectMiddleware.php
																																																																																																														    │   │   │   ├── RequestOptions.php
																																																																																																																    │   │   │   ├── RetryMiddleware.php
																																																																																																																		    │   │   │   ├── TransferStats.php
																																																																																																																				    │   │   │   └── UriTemplate.php
																																																																																																																						    │   │   ├── tests
																																																																																																																								    │   │   └── UPGRADING.md
																																																																																																																										    │   ├── promises
																																																																																																																												    │   │   ├── CHANGELOG.md
																																																																																																																														    │   │   ├── composer.json
																																																																																																																																    │   │   ├── LICENSE
																																																																																																																																		    │   │   ├── Makefile
																																																																																																																																				    │   │   ├── README.md
																																																																																																																																						    │   │   └── src
																																																																																																																																								    │   │       ├── AggregateException.php
																																																																																																																																										    │   │       ├── CancellationException.php
																																																																																																																																												    │   │       ├── Coroutine.php
																																																																																																																																														    │   │       ├── EachPromise.php
																																																																																																																																																    │   │       ├── FulfilledPromise.php
																																																																																																																																																		    │   │       ├── functions_include.php
																																																																																																																																																				    │   │       ├── functions.php
																																																																																																																																																						    │   │       ├── PromiseInterface.php
																																																																																																																																																								    │   │       ├── Promise.php
																																																																																																																																																										    │   │       ├── PromisorInterface.php
																																																																																																																																																												    │   │       ├── RejectedPromise.php
																																																																																																																																																														    │   │       ├── RejectionException.php
																																																																																																																																																																    │   │       ├── TaskQueueInterface.php
																																																																																																																																																																		    │   │       └── TaskQueue.php
																																																																																																																																																																				    │   └── psr7
																																																																																																																																																																						    │       ├── CHANGELOG.md
																																																																																																																																																																								    │       ├── composer.json
																																																																																																																																																																										    │       ├── LICENSE
																																																																																																																																																																												    │       ├── README.md
																																																																																																																																																																														    │       └── src
																																																																																																																																																																																    │           ├── AppendStream.php
																																																																																																																																																																																		    │           ├── BufferStream.php
																																																																																																																																																																																				    │           ├── CachingStream.php
																																																																																																																																																																																						    │           ├── DroppingStream.php
																																																																																																																																																																																								    │           ├── FnStream.php
																																																																																																																																																																																										    │           ├── functions_include.php
																																																																																																																																																																																												    │           ├── functions.php
																																																																																																																																																																																														    │           ├── InflateStream.php
																																																																																																																																																																																																    │           ├── LazyOpenStream.php
																																																																																																																																																																																																		    │           ├── LimitStream.php
																																																																																																																																																																																																				    │           ├── MessageTrait.php
																																																																																																																																																																																																						    │           ├── MultipartStream.php
																																																																																																																																																																																																								    │           ├── NoSeekStream.php
																																																																																																																																																																																																										    │           ├── PumpStream.php
																																																																																																																																																																																																												    │           ├── Request.php
																																																																																																																																																																																																														    │           ├── Response.php
																																																																																																																																																																																																																    │           ├── ServerRequest.php
																																																																																																																																																																																																																		    │           ├── StreamDecoratorTrait.php
																																																																																																																																																																																																																				    │           ├── Stream.php
																																																																																																																																																																																																																						    │           ├── StreamWrapper.php
																																																																																																																																																																																																																								    │           ├── UploadedFile.php
																																																																																																																																																																																																																										    │           ├── UriNormalizer.php
																																																																																																																																																																																																																												    │           ├── Uri.php
																																																																																																																																																																																																																														    │           └── UriResolver.php
																																																																																																																																																																																																																																    └── psr
																																																																																																																																																																																																																																		        └── http-message
																																																																																																																																																																																																																																						            ├── CHANGELOG.md
																																																																																																																																																																																																																																												            ├── composer.json
																																																																																																																																																																																																																																																		            ├── LICENSE
																																																																																																																																																																																																																																																								            ├── README.md
																																																																																																																																																																																																																																																														            └── src
																																																																																																																																																																																																																																																																				                ├── MessageInterface.php
																																																																																																																																																																																																																																																																												                ├── RequestInterface.php
																																																																																																																																																																																																																																																																																				                ├── ResponseInterface.php
																																																																																																																																																																																																																																																																																												                ├── ServerRequestInterface.php
																																																																																																																																																																																																																																																																																																				                ├── StreamInterface.php
																																																																																																																																																																																																																																																																																																												                ├── UploadedFileInterface.php
																																																																																																																																																																																																																																																																																																																				                └── UriInterface.php
																																																																																																																																																																																																																																																																																																																												
