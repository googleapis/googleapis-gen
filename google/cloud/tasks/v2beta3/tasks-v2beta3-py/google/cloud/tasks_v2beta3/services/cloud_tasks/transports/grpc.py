# -*- coding: utf-8 -*-

# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

import warnings
from typing import Callable, Dict, Optional, Sequence, Tuple

from google.api_core import grpc_helpers   # type: ignore
from google.api_core import gapic_v1       # type: ignore
from google import auth                    # type: ignore
from google.auth import credentials        # type: ignore
from google.auth.transport.grpc import SslCredentials  # type: ignore

import grpc  # type: ignore

from google.cloud.tasks_v2beta3.types import cloudtasks
from google.cloud.tasks_v2beta3.types import queue
from google.cloud.tasks_v2beta3.types import queue as gct_queue
from google.cloud.tasks_v2beta3.types import task
from google.cloud.tasks_v2beta3.types import task as gct_task
from google.iam.v1 import iam_policy_pb2 as iam_policy  # type: ignore
from google.iam.v1 import policy_pb2 as giv_policy  # type: ignore
from google.protobuf import empty_pb2 as empty  # type: ignore

from .base import CloudTasksTransport, DEFAULT_CLIENT_INFO


class CloudTasksGrpcTransport(CloudTasksTransport):
    """gRPC backend transport for CloudTasks.

    Cloud Tasks allows developers to manage the execution of
    background work in their applications.

    This class defines the same methods as the primary client, so the
    primary client can load the underlying transport implementation
    and call it.

    It sends protocol buffers over the wire using gRPC (which is built on
    top of HTTP/2); the ``grpcio`` package must be installed.
    """
    _stubs: Dict[str, Callable]

    def __init__(self, *,
            host: str = 'cloudtasks.googleapis.com',
            credentials: credentials.Credentials = None,
            credentials_file: str = None,
            scopes: Sequence[str] = None,
            channel: grpc.Channel = None,
            api_mtls_endpoint: str = None,
            client_cert_source: Callable[[], Tuple[bytes, bytes]] = None,
            ssl_channel_credentials: grpc.ChannelCredentials = None,
            client_cert_source_for_mtls: Callable[[], Tuple[bytes, bytes]] = None,
            quota_project_id: Optional[str] = None,
            client_info: gapic_v1.client_info.ClientInfo = DEFAULT_CLIENT_INFO,
            ) -> None:
        """Instantiate the transport.

        Args:
            host (Optional[str]): The hostname to connect to.
            credentials (Optional[google.auth.credentials.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify the application to the service; if none
                are specified, the client will attempt to ascertain the
                credentials from the environment.
                This argument is ignored if ``channel`` is provided.
            credentials_file (Optional[str]): A file with credentials that can
                be loaded with :func:`google.auth.load_credentials_from_file`.
                This argument is ignored if ``channel`` is provided.
            scopes (Optional(Sequence[str])): A list of scopes. This argument is
                ignored if ``channel`` is provided.
            channel (Optional[grpc.Channel]): A ``Channel`` instance through
                which to make calls.
            api_mtls_endpoint (Optional[str]): Deprecated. The mutual TLS endpoint.
                If provided, it overrides the ``host`` argument and tries to create
                a mutual TLS channel with client SSL credentials from
                ``client_cert_source`` or applicatin default SSL credentials.
            client_cert_source (Optional[Callable[[], Tuple[bytes, bytes]]]):
                Deprecated. A callback to provide client SSL certificate bytes and
                private key bytes, both in PEM format. It is ignored if
                ``api_mtls_endpoint`` is None.
            ssl_channel_credentials (grpc.ChannelCredentials): SSL credentials
                for grpc channel. It is ignored if ``channel`` is provided.
            client_cert_source_for_mtls (Optional[Callable[[], Tuple[bytes, bytes]]]):
                A callback to provide client certificate bytes and private key bytes,
                both in PEM format. It is used to configure mutual TLS channel. It is
                ignored if ``channel`` or ``ssl_channel_credentials`` is provided.
            quota_project_id (Optional[str]): An optional project to use for billing
                and quota.
            client_info (google.api_core.gapic_v1.client_info.ClientInfo):
                The client info used to send a user-agent string along with
                API requests. If ``None``, then default info will be used.
                Generally, you only need to set this if you're developing
                your own client library.

        Raises:
          google.auth.exceptions.MutualTLSChannelError: If mutual TLS transport
              creation failed for any reason.
          google.api_core.exceptions.DuplicateCredentialArgs: If both ``credentials``
              and ``credentials_file`` are passed.
        """
        self._grpc_channel = None
        self._ssl_channel_credentials = ssl_channel_credentials
        self._stubs: Dict[str, Callable] = {}

        if api_mtls_endpoint:
            warnings.warn("api_mtls_endpoint is deprecated", DeprecationWarning)
        if client_cert_source:
            warnings.warn("client_cert_source is deprecated", DeprecationWarning)

        if channel:
            # Ignore credentials if a channel was passed.
            credentials = False
            # If a channel was explicitly provided, set it.
            self._grpc_channel = channel
            self._ssl_channel_credentials = None

        else:
            if api_mtls_endpoint:
                host = api_mtls_endpoint

                # Create SSL credentials with client_cert_source or application
                # default SSL credentials.
                if client_cert_source:
                    cert, key = client_cert_source()
                    self._ssl_channel_credentials = grpc.ssl_channel_credentials(
                        certificate_chain=cert, private_key=key
                    )
                else:
                    self._ssl_channel_credentials = SslCredentials().ssl_credentials

            else:
                if client_cert_source_for_mtls and not ssl_channel_credentials:
                    cert, key = client_cert_source_for_mtls()
                    self._ssl_channel_credentials = grpc.ssl_channel_credentials(
                        certificate_chain=cert, private_key=key
                    )

        # The base transport sets the host, credentials and scopes
        super().__init__(
            host=host,
            credentials=credentials,
            credentials_file=credentials_file,
            scopes=scopes,
            quota_project_id=quota_project_id,
            client_info=client_info,
        )

        if not self._grpc_channel:
            self._grpc_channel = type(self).create_channel(
                self._host,
                credentials=self._credentials,
                credentials_file=credentials_file,
                scopes=self._scopes,
                ssl_credentials=self._ssl_channel_credentials,
                quota_project_id=quota_project_id,
                options=[
                    ("grpc.max_send_message_length", -1),
                    ("grpc.max_receive_message_length", -1),
                ],
            )

        # Wrap messages. This must be done after self._grpc_channel exists
        self._prep_wrapped_messages(client_info)

    @classmethod
    def create_channel(cls,
                       host: str = 'cloudtasks.googleapis.com',
                       credentials: credentials.Credentials = None,
                       credentials_file: str = None,
                       scopes: Optional[Sequence[str]] = None,
                       quota_project_id: Optional[str] = None,
                       **kwargs) -> grpc.Channel:
        """Create and return a gRPC channel object.
        Args:
            host (Optional[str]): The host for the channel to use.
            credentials (Optional[~.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify this application to the service. If
                none are specified, the client will attempt to ascertain
                the credentials from the environment.
            credentials_file (Optional[str]): A file with credentials that can
                be loaded with :func:`google.auth.load_credentials_from_file`.
                This argument is mutually exclusive with credentials.
            scopes (Optional[Sequence[str]]): A optional list of scopes needed for this
                service. These are only used when credentials are not specified and
                are passed to :func:`google.auth.default`.
            quota_project_id (Optional[str]): An optional project to use for billing
                and quota.
            kwargs (Optional[dict]): Keyword arguments, which are passed to the
                channel creation.
        Returns:
            grpc.Channel: A gRPC channel object.

        Raises:
            google.api_core.exceptions.DuplicateCredentialArgs: If both ``credentials``
              and ``credentials_file`` are passed.
        """
        scopes = scopes or cls.AUTH_SCOPES
        return grpc_helpers.create_channel(
            host,
            credentials=credentials,
            credentials_file=credentials_file,
            scopes=scopes,
            quota_project_id=quota_project_id,
            **kwargs
        )

    @property
    def grpc_channel(self) -> grpc.Channel:
        """Return the channel designed to connect to this service.
        """
        return self._grpc_channel

    @property
    def list_queues(self) -> Callable[
            [cloudtasks.ListQueuesRequest],
            cloudtasks.ListQueuesResponse]:
        r"""Return a callable for the list queues method over gRPC.

        Lists queues.
        Queues are returned in lexicographical order.

        Returns:
            Callable[[~.ListQueuesRequest],
                    ~.ListQueuesResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_queues' not in self._stubs:
            self._stubs['list_queues'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/ListQueues',
                request_serializer=cloudtasks.ListQueuesRequest.serialize,
                response_deserializer=cloudtasks.ListQueuesResponse.deserialize,
            )
        return self._stubs['list_queues']

    @property
    def get_queue(self) -> Callable[
            [cloudtasks.GetQueueRequest],
            queue.Queue]:
        r"""Return a callable for the get queue method over gRPC.

        Gets a queue.

        Returns:
            Callable[[~.GetQueueRequest],
                    ~.Queue]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_queue' not in self._stubs:
            self._stubs['get_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/GetQueue',
                request_serializer=cloudtasks.GetQueueRequest.serialize,
                response_deserializer=queue.Queue.deserialize,
            )
        return self._stubs['get_queue']

    @property
    def create_queue(self) -> Callable[
            [cloudtasks.CreateQueueRequest],
            gct_queue.Queue]:
        r"""Return a callable for the create queue method over gRPC.

        Creates a queue.

        Queues created with this method allow tasks to live for a
        maximum of 31 days. After a task is 31 days old, the task will
        be deleted regardless of whether it was dispatched or not.

        WARNING: Using this method may have unintended side effects if
        you are using an App Engine ``queue.yaml`` or ``queue.xml`` file
        to manage your queues. Read `Overview of Queue Management and
        queue.yaml <https://cloud.google.com/tasks/docs/queue-yaml>`__
        before using this method.

        Returns:
            Callable[[~.CreateQueueRequest],
                    ~.Queue]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'create_queue' not in self._stubs:
            self._stubs['create_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/CreateQueue',
                request_serializer=cloudtasks.CreateQueueRequest.serialize,
                response_deserializer=gct_queue.Queue.deserialize,
            )
        return self._stubs['create_queue']

    @property
    def update_queue(self) -> Callable[
            [cloudtasks.UpdateQueueRequest],
            gct_queue.Queue]:
        r"""Return a callable for the update queue method over gRPC.

        Updates a queue.

        This method creates the queue if it does not exist and updates
        the queue if it does exist.

        Queues created with this method allow tasks to live for a
        maximum of 31 days. After a task is 31 days old, the task will
        be deleted regardless of whether it was dispatched or not.

        WARNING: Using this method may have unintended side effects if
        you are using an App Engine ``queue.yaml`` or ``queue.xml`` file
        to manage your queues. Read `Overview of Queue Management and
        queue.yaml <https://cloud.google.com/tasks/docs/queue-yaml>`__
        before using this method.

        Returns:
            Callable[[~.UpdateQueueRequest],
                    ~.Queue]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'update_queue' not in self._stubs:
            self._stubs['update_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/UpdateQueue',
                request_serializer=cloudtasks.UpdateQueueRequest.serialize,
                response_deserializer=gct_queue.Queue.deserialize,
            )
        return self._stubs['update_queue']

    @property
    def delete_queue(self) -> Callable[
            [cloudtasks.DeleteQueueRequest],
            empty.Empty]:
        r"""Return a callable for the delete queue method over gRPC.

        Deletes a queue.

        This command will delete the queue even if it has tasks in it.

        Note: If you delete a queue, a queue with the same name can't be
        created for 7 days.

        WARNING: Using this method may have unintended side effects if
        you are using an App Engine ``queue.yaml`` or ``queue.xml`` file
        to manage your queues. Read `Overview of Queue Management and
        queue.yaml <https://cloud.google.com/tasks/docs/queue-yaml>`__
        before using this method.

        Returns:
            Callable[[~.DeleteQueueRequest],
                    ~.Empty]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'delete_queue' not in self._stubs:
            self._stubs['delete_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/DeleteQueue',
                request_serializer=cloudtasks.DeleteQueueRequest.serialize,
                response_deserializer=empty.Empty.FromString,
            )
        return self._stubs['delete_queue']

    @property
    def purge_queue(self) -> Callable[
            [cloudtasks.PurgeQueueRequest],
            queue.Queue]:
        r"""Return a callable for the purge queue method over gRPC.

        Purges a queue by deleting all of its tasks.
        All tasks created before this method is called are
        permanently deleted.
        Purge operations can take up to one minute to take
        effect. Tasks might be dispatched before the purge takes
        effect. A purge is irreversible.

        Returns:
            Callable[[~.PurgeQueueRequest],
                    ~.Queue]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'purge_queue' not in self._stubs:
            self._stubs['purge_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/PurgeQueue',
                request_serializer=cloudtasks.PurgeQueueRequest.serialize,
                response_deserializer=queue.Queue.deserialize,
            )
        return self._stubs['purge_queue']

    @property
    def pause_queue(self) -> Callable[
            [cloudtasks.PauseQueueRequest],
            queue.Queue]:
        r"""Return a callable for the pause queue method over gRPC.

        Pauses the queue.

        If a queue is paused then the system will stop dispatching tasks
        until the queue is resumed via
        [ResumeQueue][google.cloud.tasks.v2beta3.CloudTasks.ResumeQueue].
        Tasks can still be added when the queue is paused. A queue is
        paused if its [state][google.cloud.tasks.v2beta3.Queue.state] is
        [PAUSED][google.cloud.tasks.v2beta3.Queue.State.PAUSED].

        Returns:
            Callable[[~.PauseQueueRequest],
                    ~.Queue]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'pause_queue' not in self._stubs:
            self._stubs['pause_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/PauseQueue',
                request_serializer=cloudtasks.PauseQueueRequest.serialize,
                response_deserializer=queue.Queue.deserialize,
            )
        return self._stubs['pause_queue']

    @property
    def resume_queue(self) -> Callable[
            [cloudtasks.ResumeQueueRequest],
            queue.Queue]:
        r"""Return a callable for the resume queue method over gRPC.

        Resume a queue.

        This method resumes a queue after it has been
        [PAUSED][google.cloud.tasks.v2beta3.Queue.State.PAUSED] or
        [DISABLED][google.cloud.tasks.v2beta3.Queue.State.DISABLED]. The
        state of a queue is stored in the queue's
        [state][google.cloud.tasks.v2beta3.Queue.state]; after calling
        this method it will be set to
        [RUNNING][google.cloud.tasks.v2beta3.Queue.State.RUNNING].

        WARNING: Resuming many high-QPS queues at the same time can lead
        to target overloading. If you are resuming high-QPS queues,
        follow the 500/50/5 pattern described in `Managing Cloud Tasks
        Scaling
        Risks <https://cloud.google.com/tasks/docs/manage-cloud-task-scaling>`__.

        Returns:
            Callable[[~.ResumeQueueRequest],
                    ~.Queue]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'resume_queue' not in self._stubs:
            self._stubs['resume_queue'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/ResumeQueue',
                request_serializer=cloudtasks.ResumeQueueRequest.serialize,
                response_deserializer=queue.Queue.deserialize,
            )
        return self._stubs['resume_queue']

    @property
    def get_iam_policy(self) -> Callable[
            [iam_policy.GetIamPolicyRequest],
            giv_policy.Policy]:
        r"""Return a callable for the get iam policy method over gRPC.

        Gets the access control policy for a
        [Queue][google.cloud.tasks.v2beta3.Queue]. Returns an empty
        policy if the resource exists and does not have a policy set.

        Authorization requires the following `Google
        IAM <https://cloud.google.com/iam>`__ permission on the
        specified resource parent:

        -  ``cloudtasks.queues.getIamPolicy``

        Returns:
            Callable[[~.GetIamPolicyRequest],
                    ~.Policy]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_iam_policy' not in self._stubs:
            self._stubs['get_iam_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/GetIamPolicy',
                request_serializer=iam_policy.GetIamPolicyRequest.SerializeToString,
                response_deserializer=giv_policy.Policy.FromString,
            )
        return self._stubs['get_iam_policy']

    @property
    def set_iam_policy(self) -> Callable[
            [iam_policy.SetIamPolicyRequest],
            giv_policy.Policy]:
        r"""Return a callable for the set iam policy method over gRPC.

        Sets the access control policy for a
        [Queue][google.cloud.tasks.v2beta3.Queue]. Replaces any existing
        policy.

        Note: The Cloud Console does not check queue-level IAM
        permissions yet. Project-level permissions are required to use
        the Cloud Console.

        Authorization requires the following `Google
        IAM <https://cloud.google.com/iam>`__ permission on the
        specified resource parent:

        -  ``cloudtasks.queues.setIamPolicy``

        Returns:
            Callable[[~.SetIamPolicyRequest],
                    ~.Policy]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'set_iam_policy' not in self._stubs:
            self._stubs['set_iam_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/SetIamPolicy',
                request_serializer=iam_policy.SetIamPolicyRequest.SerializeToString,
                response_deserializer=giv_policy.Policy.FromString,
            )
        return self._stubs['set_iam_policy']

    @property
    def test_iam_permissions(self) -> Callable[
            [iam_policy.TestIamPermissionsRequest],
            iam_policy.TestIamPermissionsResponse]:
        r"""Return a callable for the test iam permissions method over gRPC.

        Returns permissions that a caller has on a
        [Queue][google.cloud.tasks.v2beta3.Queue]. If the resource does
        not exist, this will return an empty set of permissions, not a
        [NOT_FOUND][google.rpc.Code.NOT_FOUND] error.

        Note: This operation is designed to be used for building
        permission-aware UIs and command-line tools, not for
        authorization checking. This operation may "fail open" without
        warning.

        Returns:
            Callable[[~.TestIamPermissionsRequest],
                    ~.TestIamPermissionsResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'test_iam_permissions' not in self._stubs:
            self._stubs['test_iam_permissions'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/TestIamPermissions',
                request_serializer=iam_policy.TestIamPermissionsRequest.SerializeToString,
                response_deserializer=iam_policy.TestIamPermissionsResponse.FromString,
            )
        return self._stubs['test_iam_permissions']

    @property
    def list_tasks(self) -> Callable[
            [cloudtasks.ListTasksRequest],
            cloudtasks.ListTasksResponse]:
        r"""Return a callable for the list tasks method over gRPC.

        Lists the tasks in a queue.

        By default, only the
        [BASIC][google.cloud.tasks.v2beta3.Task.View.BASIC] view is
        retrieved due to performance considerations;
        [response_view][google.cloud.tasks.v2beta3.ListTasksRequest.response_view]
        controls the subset of information which is returned.

        The tasks may be returned in any order. The ordering may change
        at any time.

        Returns:
            Callable[[~.ListTasksRequest],
                    ~.ListTasksResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_tasks' not in self._stubs:
            self._stubs['list_tasks'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/ListTasks',
                request_serializer=cloudtasks.ListTasksRequest.serialize,
                response_deserializer=cloudtasks.ListTasksResponse.deserialize,
            )
        return self._stubs['list_tasks']

    @property
    def get_task(self) -> Callable[
            [cloudtasks.GetTaskRequest],
            task.Task]:
        r"""Return a callable for the get task method over gRPC.

        Gets a task.

        Returns:
            Callable[[~.GetTaskRequest],
                    ~.Task]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_task' not in self._stubs:
            self._stubs['get_task'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/GetTask',
                request_serializer=cloudtasks.GetTaskRequest.serialize,
                response_deserializer=task.Task.deserialize,
            )
        return self._stubs['get_task']

    @property
    def create_task(self) -> Callable[
            [cloudtasks.CreateTaskRequest],
            gct_task.Task]:
        r"""Return a callable for the create task method over gRPC.

        Creates a task and adds it to a queue.

        Tasks cannot be updated after creation; there is no UpdateTask
        command.

        -  The maximum task size is 100KB.

        Returns:
            Callable[[~.CreateTaskRequest],
                    ~.Task]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'create_task' not in self._stubs:
            self._stubs['create_task'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/CreateTask',
                request_serializer=cloudtasks.CreateTaskRequest.serialize,
                response_deserializer=gct_task.Task.deserialize,
            )
        return self._stubs['create_task']

    @property
    def delete_task(self) -> Callable[
            [cloudtasks.DeleteTaskRequest],
            empty.Empty]:
        r"""Return a callable for the delete task method over gRPC.

        Deletes a task.
        A task can be deleted if it is scheduled or dispatched.
        A task cannot be deleted if it has executed successfully
        or permanently failed.

        Returns:
            Callable[[~.DeleteTaskRequest],
                    ~.Empty]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'delete_task' not in self._stubs:
            self._stubs['delete_task'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/DeleteTask',
                request_serializer=cloudtasks.DeleteTaskRequest.serialize,
                response_deserializer=empty.Empty.FromString,
            )
        return self._stubs['delete_task']

    @property
    def run_task(self) -> Callable[
            [cloudtasks.RunTaskRequest],
            task.Task]:
        r"""Return a callable for the run task method over gRPC.

        Forces a task to run now.

        When this method is called, Cloud Tasks will dispatch the task,
        even if the task is already running, the queue has reached its
        [RateLimits][google.cloud.tasks.v2beta3.RateLimits] or is
        [PAUSED][google.cloud.tasks.v2beta3.Queue.State.PAUSED].

        This command is meant to be used for manual debugging. For
        example,
        [RunTask][google.cloud.tasks.v2beta3.CloudTasks.RunTask] can be
        used to retry a failed task after a fix has been made or to
        manually force a task to be dispatched now.

        The dispatched task is returned. That is, the task that is
        returned contains the [status][Task.status] after the task is
        dispatched but before the task is received by its target.

        If Cloud Tasks receives a successful response from the task's
        target, then the task will be deleted; otherwise the task's
        [schedule_time][google.cloud.tasks.v2beta3.Task.schedule_time]
        will be reset to the time that
        [RunTask][google.cloud.tasks.v2beta3.CloudTasks.RunTask] was
        called plus the retry delay specified in the queue's
        [RetryConfig][google.cloud.tasks.v2beta3.RetryConfig].

        [RunTask][google.cloud.tasks.v2beta3.CloudTasks.RunTask] returns
        [NOT_FOUND][google.rpc.Code.NOT_FOUND] when it is called on a
        task that has already succeeded or permanently failed.

        Returns:
            Callable[[~.RunTaskRequest],
                    ~.Task]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'run_task' not in self._stubs:
            self._stubs['run_task'] = self.grpc_channel.unary_unary(
                '/google.cloud.tasks.v2beta3.CloudTasks/RunTask',
                request_serializer=cloudtasks.RunTaskRequest.serialize,
                response_deserializer=task.Task.deserialize,
            )
        return self._stubs['run_task']


__all__ = (
    'CloudTasksGrpcTransport',
)
