package com.google.cloud.workflows.executions.v1;

import static io.grpc.MethodDescriptor.generateFullMethodName;
import static io.grpc.stub.ClientCalls.asyncBidiStreamingCall;
import static io.grpc.stub.ClientCalls.asyncClientStreamingCall;
import static io.grpc.stub.ClientCalls.asyncServerStreamingCall;
import static io.grpc.stub.ClientCalls.asyncUnaryCall;
import static io.grpc.stub.ClientCalls.blockingServerStreamingCall;
import static io.grpc.stub.ClientCalls.blockingUnaryCall;
import static io.grpc.stub.ClientCalls.futureUnaryCall;
import static io.grpc.stub.ServerCalls.asyncBidiStreamingCall;
import static io.grpc.stub.ServerCalls.asyncClientStreamingCall;
import static io.grpc.stub.ServerCalls.asyncServerStreamingCall;
import static io.grpc.stub.ServerCalls.asyncUnaryCall;
import static io.grpc.stub.ServerCalls.asyncUnimplementedStreamingCall;
import static io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall;

/**
 * <pre>
 * Executions is used to start and manage running instances of
 * [Workflows][google.cloud.workflows.v1.Workflow] called executions.
 * </pre>
 */
@javax.annotation.Generated(
    value = "by gRPC proto compiler",
    comments = "Source: google/cloud/workflows/executions/v1/executions.proto")
public final class ExecutionsGrpc {

  private ExecutionsGrpc() {}

  public static final String SERVICE_NAME = "google.cloud.workflows.executions.v1.Executions";

  // Static method descriptors that strictly reflect the proto.
  private static volatile io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.ListExecutionsRequest,
      com.google.cloud.workflows.executions.v1.ListExecutionsResponse> getListExecutionsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListExecutions",
      requestType = com.google.cloud.workflows.executions.v1.ListExecutionsRequest.class,
      responseType = com.google.cloud.workflows.executions.v1.ListExecutionsResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.ListExecutionsRequest,
      com.google.cloud.workflows.executions.v1.ListExecutionsResponse> getListExecutionsMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.ListExecutionsRequest, com.google.cloud.workflows.executions.v1.ListExecutionsResponse> getListExecutionsMethod;
    if ((getListExecutionsMethod = ExecutionsGrpc.getListExecutionsMethod) == null) {
      synchronized (ExecutionsGrpc.class) {
        if ((getListExecutionsMethod = ExecutionsGrpc.getListExecutionsMethod) == null) {
          ExecutionsGrpc.getListExecutionsMethod = getListExecutionsMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.workflows.executions.v1.ListExecutionsRequest, com.google.cloud.workflows.executions.v1.ListExecutionsResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListExecutions"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.ListExecutionsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.ListExecutionsResponse.getDefaultInstance()))
              .setSchemaDescriptor(new ExecutionsMethodDescriptorSupplier("ListExecutions"))
              .build();
        }
      }
    }
    return getListExecutionsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.CreateExecutionRequest,
      com.google.cloud.workflows.executions.v1.Execution> getCreateExecutionMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CreateExecution",
      requestType = com.google.cloud.workflows.executions.v1.CreateExecutionRequest.class,
      responseType = com.google.cloud.workflows.executions.v1.Execution.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.CreateExecutionRequest,
      com.google.cloud.workflows.executions.v1.Execution> getCreateExecutionMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.CreateExecutionRequest, com.google.cloud.workflows.executions.v1.Execution> getCreateExecutionMethod;
    if ((getCreateExecutionMethod = ExecutionsGrpc.getCreateExecutionMethod) == null) {
      synchronized (ExecutionsGrpc.class) {
        if ((getCreateExecutionMethod = ExecutionsGrpc.getCreateExecutionMethod) == null) {
          ExecutionsGrpc.getCreateExecutionMethod = getCreateExecutionMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.workflows.executions.v1.CreateExecutionRequest, com.google.cloud.workflows.executions.v1.Execution>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CreateExecution"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.CreateExecutionRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.Execution.getDefaultInstance()))
              .setSchemaDescriptor(new ExecutionsMethodDescriptorSupplier("CreateExecution"))
              .build();
        }
      }
    }
    return getCreateExecutionMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.GetExecutionRequest,
      com.google.cloud.workflows.executions.v1.Execution> getGetExecutionMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetExecution",
      requestType = com.google.cloud.workflows.executions.v1.GetExecutionRequest.class,
      responseType = com.google.cloud.workflows.executions.v1.Execution.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.GetExecutionRequest,
      com.google.cloud.workflows.executions.v1.Execution> getGetExecutionMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.GetExecutionRequest, com.google.cloud.workflows.executions.v1.Execution> getGetExecutionMethod;
    if ((getGetExecutionMethod = ExecutionsGrpc.getGetExecutionMethod) == null) {
      synchronized (ExecutionsGrpc.class) {
        if ((getGetExecutionMethod = ExecutionsGrpc.getGetExecutionMethod) == null) {
          ExecutionsGrpc.getGetExecutionMethod = getGetExecutionMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.workflows.executions.v1.GetExecutionRequest, com.google.cloud.workflows.executions.v1.Execution>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetExecution"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.GetExecutionRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.Execution.getDefaultInstance()))
              .setSchemaDescriptor(new ExecutionsMethodDescriptorSupplier("GetExecution"))
              .build();
        }
      }
    }
    return getGetExecutionMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.CancelExecutionRequest,
      com.google.cloud.workflows.executions.v1.Execution> getCancelExecutionMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CancelExecution",
      requestType = com.google.cloud.workflows.executions.v1.CancelExecutionRequest.class,
      responseType = com.google.cloud.workflows.executions.v1.Execution.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.CancelExecutionRequest,
      com.google.cloud.workflows.executions.v1.Execution> getCancelExecutionMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.workflows.executions.v1.CancelExecutionRequest, com.google.cloud.workflows.executions.v1.Execution> getCancelExecutionMethod;
    if ((getCancelExecutionMethod = ExecutionsGrpc.getCancelExecutionMethod) == null) {
      synchronized (ExecutionsGrpc.class) {
        if ((getCancelExecutionMethod = ExecutionsGrpc.getCancelExecutionMethod) == null) {
          ExecutionsGrpc.getCancelExecutionMethod = getCancelExecutionMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.workflows.executions.v1.CancelExecutionRequest, com.google.cloud.workflows.executions.v1.Execution>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CancelExecution"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.CancelExecutionRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.workflows.executions.v1.Execution.getDefaultInstance()))
              .setSchemaDescriptor(new ExecutionsMethodDescriptorSupplier("CancelExecution"))
              .build();
        }
      }
    }
    return getCancelExecutionMethod;
  }

  /**
   * Creates a new async stub that supports all call types for the service
   */
  public static ExecutionsStub newStub(io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<ExecutionsStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<ExecutionsStub>() {
        @java.lang.Override
        public ExecutionsStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new ExecutionsStub(channel, callOptions);
        }
      };
    return ExecutionsStub.newStub(factory, channel);
  }

  /**
   * Creates a new blocking-style stub that supports unary and streaming output calls on the service
   */
  public static ExecutionsBlockingStub newBlockingStub(
      io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<ExecutionsBlockingStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<ExecutionsBlockingStub>() {
        @java.lang.Override
        public ExecutionsBlockingStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new ExecutionsBlockingStub(channel, callOptions);
        }
      };
    return ExecutionsBlockingStub.newStub(factory, channel);
  }

  /**
   * Creates a new ListenableFuture-style stub that supports unary calls on the service
   */
  public static ExecutionsFutureStub newFutureStub(
      io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<ExecutionsFutureStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<ExecutionsFutureStub>() {
        @java.lang.Override
        public ExecutionsFutureStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new ExecutionsFutureStub(channel, callOptions);
        }
      };
    return ExecutionsFutureStub.newStub(factory, channel);
  }

  /**
   * <pre>
   * Executions is used to start and manage running instances of
   * [Workflows][google.cloud.workflows.v1.Workflow] called executions.
   * </pre>
   */
  public static abstract class ExecutionsImplBase implements io.grpc.BindableService {

    /**
     * <pre>
     * Returns a list of executions which belong to the workflow with
     * the given name. The method returns executions of all workflow
     * revisions. Returned executions are ordered by their start time (newest
     * first).
     * </pre>
     */
    public void listExecutions(com.google.cloud.workflows.executions.v1.ListExecutionsRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.ListExecutionsResponse> responseObserver) {
      asyncUnimplementedUnaryCall(getListExecutionsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Creates a new execution using the latest revision of the given workflow.
     * </pre>
     */
    public void createExecution(com.google.cloud.workflows.executions.v1.CreateExecutionRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution> responseObserver) {
      asyncUnimplementedUnaryCall(getCreateExecutionMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns an execution of the given name.
     * </pre>
     */
    public void getExecution(com.google.cloud.workflows.executions.v1.GetExecutionRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution> responseObserver) {
      asyncUnimplementedUnaryCall(getGetExecutionMethod(), responseObserver);
    }

    /**
     * <pre>
     * Cancels an execution of the given name.
     * </pre>
     */
    public void cancelExecution(com.google.cloud.workflows.executions.v1.CancelExecutionRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution> responseObserver) {
      asyncUnimplementedUnaryCall(getCancelExecutionMethod(), responseObserver);
    }

    @java.lang.Override public final io.grpc.ServerServiceDefinition bindService() {
      return io.grpc.ServerServiceDefinition.builder(getServiceDescriptor())
          .addMethod(
            getListExecutionsMethod(),
            asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.workflows.executions.v1.ListExecutionsRequest,
                com.google.cloud.workflows.executions.v1.ListExecutionsResponse>(
                  this, METHODID_LIST_EXECUTIONS)))
          .addMethod(
            getCreateExecutionMethod(),
            asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.workflows.executions.v1.CreateExecutionRequest,
                com.google.cloud.workflows.executions.v1.Execution>(
                  this, METHODID_CREATE_EXECUTION)))
          .addMethod(
            getGetExecutionMethod(),
            asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.workflows.executions.v1.GetExecutionRequest,
                com.google.cloud.workflows.executions.v1.Execution>(
                  this, METHODID_GET_EXECUTION)))
          .addMethod(
            getCancelExecutionMethod(),
            asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.workflows.executions.v1.CancelExecutionRequest,
                com.google.cloud.workflows.executions.v1.Execution>(
                  this, METHODID_CANCEL_EXECUTION)))
          .build();
    }
  }

  /**
   * <pre>
   * Executions is used to start and manage running instances of
   * [Workflows][google.cloud.workflows.v1.Workflow] called executions.
   * </pre>
   */
  public static final class ExecutionsStub extends io.grpc.stub.AbstractAsyncStub<ExecutionsStub> {
    private ExecutionsStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected ExecutionsStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new ExecutionsStub(channel, callOptions);
    }

    /**
     * <pre>
     * Returns a list of executions which belong to the workflow with
     * the given name. The method returns executions of all workflow
     * revisions. Returned executions are ordered by their start time (newest
     * first).
     * </pre>
     */
    public void listExecutions(com.google.cloud.workflows.executions.v1.ListExecutionsRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.ListExecutionsResponse> responseObserver) {
      asyncUnaryCall(
          getChannel().newCall(getListExecutionsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Creates a new execution using the latest revision of the given workflow.
     * </pre>
     */
    public void createExecution(com.google.cloud.workflows.executions.v1.CreateExecutionRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution> responseObserver) {
      asyncUnaryCall(
          getChannel().newCall(getCreateExecutionMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns an execution of the given name.
     * </pre>
     */
    public void getExecution(com.google.cloud.workflows.executions.v1.GetExecutionRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution> responseObserver) {
      asyncUnaryCall(
          getChannel().newCall(getGetExecutionMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Cancels an execution of the given name.
     * </pre>
     */
    public void cancelExecution(com.google.cloud.workflows.executions.v1.CancelExecutionRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution> responseObserver) {
      asyncUnaryCall(
          getChannel().newCall(getCancelExecutionMethod(), getCallOptions()), request, responseObserver);
    }
  }

  /**
   * <pre>
   * Executions is used to start and manage running instances of
   * [Workflows][google.cloud.workflows.v1.Workflow] called executions.
   * </pre>
   */
  public static final class ExecutionsBlockingStub extends io.grpc.stub.AbstractBlockingStub<ExecutionsBlockingStub> {
    private ExecutionsBlockingStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected ExecutionsBlockingStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new ExecutionsBlockingStub(channel, callOptions);
    }

    /**
     * <pre>
     * Returns a list of executions which belong to the workflow with
     * the given name. The method returns executions of all workflow
     * revisions. Returned executions are ordered by their start time (newest
     * first).
     * </pre>
     */
    public com.google.cloud.workflows.executions.v1.ListExecutionsResponse listExecutions(com.google.cloud.workflows.executions.v1.ListExecutionsRequest request) {
      return blockingUnaryCall(
          getChannel(), getListExecutionsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Creates a new execution using the latest revision of the given workflow.
     * </pre>
     */
    public com.google.cloud.workflows.executions.v1.Execution createExecution(com.google.cloud.workflows.executions.v1.CreateExecutionRequest request) {
      return blockingUnaryCall(
          getChannel(), getCreateExecutionMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns an execution of the given name.
     * </pre>
     */
    public com.google.cloud.workflows.executions.v1.Execution getExecution(com.google.cloud.workflows.executions.v1.GetExecutionRequest request) {
      return blockingUnaryCall(
          getChannel(), getGetExecutionMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Cancels an execution of the given name.
     * </pre>
     */
    public com.google.cloud.workflows.executions.v1.Execution cancelExecution(com.google.cloud.workflows.executions.v1.CancelExecutionRequest request) {
      return blockingUnaryCall(
          getChannel(), getCancelExecutionMethod(), getCallOptions(), request);
    }
  }

  /**
   * <pre>
   * Executions is used to start and manage running instances of
   * [Workflows][google.cloud.workflows.v1.Workflow] called executions.
   * </pre>
   */
  public static final class ExecutionsFutureStub extends io.grpc.stub.AbstractFutureStub<ExecutionsFutureStub> {
    private ExecutionsFutureStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected ExecutionsFutureStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new ExecutionsFutureStub(channel, callOptions);
    }

    /**
     * <pre>
     * Returns a list of executions which belong to the workflow with
     * the given name. The method returns executions of all workflow
     * revisions. Returned executions are ordered by their start time (newest
     * first).
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.workflows.executions.v1.ListExecutionsResponse> listExecutions(
        com.google.cloud.workflows.executions.v1.ListExecutionsRequest request) {
      return futureUnaryCall(
          getChannel().newCall(getListExecutionsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Creates a new execution using the latest revision of the given workflow.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.workflows.executions.v1.Execution> createExecution(
        com.google.cloud.workflows.executions.v1.CreateExecutionRequest request) {
      return futureUnaryCall(
          getChannel().newCall(getCreateExecutionMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns an execution of the given name.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.workflows.executions.v1.Execution> getExecution(
        com.google.cloud.workflows.executions.v1.GetExecutionRequest request) {
      return futureUnaryCall(
          getChannel().newCall(getGetExecutionMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Cancels an execution of the given name.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.workflows.executions.v1.Execution> cancelExecution(
        com.google.cloud.workflows.executions.v1.CancelExecutionRequest request) {
      return futureUnaryCall(
          getChannel().newCall(getCancelExecutionMethod(), getCallOptions()), request);
    }
  }

  private static final int METHODID_LIST_EXECUTIONS = 0;
  private static final int METHODID_CREATE_EXECUTION = 1;
  private static final int METHODID_GET_EXECUTION = 2;
  private static final int METHODID_CANCEL_EXECUTION = 3;

  private static final class MethodHandlers<Req, Resp> implements
      io.grpc.stub.ServerCalls.UnaryMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.ServerStreamingMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.ClientStreamingMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.BidiStreamingMethod<Req, Resp> {
    private final ExecutionsImplBase serviceImpl;
    private final int methodId;

    MethodHandlers(ExecutionsImplBase serviceImpl, int methodId) {
      this.serviceImpl = serviceImpl;
      this.methodId = methodId;
    }

    @java.lang.Override
    @java.lang.SuppressWarnings("unchecked")
    public void invoke(Req request, io.grpc.stub.StreamObserver<Resp> responseObserver) {
      switch (methodId) {
        case METHODID_LIST_EXECUTIONS:
          serviceImpl.listExecutions((com.google.cloud.workflows.executions.v1.ListExecutionsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.ListExecutionsResponse>) responseObserver);
          break;
        case METHODID_CREATE_EXECUTION:
          serviceImpl.createExecution((com.google.cloud.workflows.executions.v1.CreateExecutionRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution>) responseObserver);
          break;
        case METHODID_GET_EXECUTION:
          serviceImpl.getExecution((com.google.cloud.workflows.executions.v1.GetExecutionRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution>) responseObserver);
          break;
        case METHODID_CANCEL_EXECUTION:
          serviceImpl.cancelExecution((com.google.cloud.workflows.executions.v1.CancelExecutionRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.workflows.executions.v1.Execution>) responseObserver);
          break;
        default:
          throw new AssertionError();
      }
    }

    @java.lang.Override
    @java.lang.SuppressWarnings("unchecked")
    public io.grpc.stub.StreamObserver<Req> invoke(
        io.grpc.stub.StreamObserver<Resp> responseObserver) {
      switch (methodId) {
        default:
          throw new AssertionError();
      }
    }
  }

  private static abstract class ExecutionsBaseDescriptorSupplier
      implements io.grpc.protobuf.ProtoFileDescriptorSupplier, io.grpc.protobuf.ProtoServiceDescriptorSupplier {
    ExecutionsBaseDescriptorSupplier() {}

    @java.lang.Override
    public com.google.protobuf.Descriptors.FileDescriptor getFileDescriptor() {
      return com.google.cloud.workflows.executions.v1.ExecutionsProto.getDescriptor();
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.ServiceDescriptor getServiceDescriptor() {
      return getFileDescriptor().findServiceByName("Executions");
    }
  }

  private static final class ExecutionsFileDescriptorSupplier
      extends ExecutionsBaseDescriptorSupplier {
    ExecutionsFileDescriptorSupplier() {}
  }

  private static final class ExecutionsMethodDescriptorSupplier
      extends ExecutionsBaseDescriptorSupplier
      implements io.grpc.protobuf.ProtoMethodDescriptorSupplier {
    private final String methodName;

    ExecutionsMethodDescriptorSupplier(String methodName) {
      this.methodName = methodName;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.MethodDescriptor getMethodDescriptor() {
      return getServiceDescriptor().findMethodByName(methodName);
    }
  }

  private static volatile io.grpc.ServiceDescriptor serviceDescriptor;

  public static io.grpc.ServiceDescriptor getServiceDescriptor() {
    io.grpc.ServiceDescriptor result = serviceDescriptor;
    if (result == null) {
      synchronized (ExecutionsGrpc.class) {
        result = serviceDescriptor;
        if (result == null) {
          serviceDescriptor = result = io.grpc.ServiceDescriptor.newBuilder(SERVICE_NAME)
              .setSchemaDescriptor(new ExecutionsFileDescriptorSupplier())
              .addMethod(getListExecutionsMethod())
              .addMethod(getCreateExecutionMethod())
              .addMethod(getGetExecutionMethod())
              .addMethod(getCancelExecutionMethod())
              .build();
        }
      }
    }
    return result;
  }
}
